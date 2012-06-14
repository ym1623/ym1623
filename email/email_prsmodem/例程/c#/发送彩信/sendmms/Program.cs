using System;
using System.Collections.Generic;
using System.Text;
using xssmsmms;

namespace sendmms
{
    class Program
    {
        [STAThread]
        static void Main(string[] args)
        {
            MmsProtocolMm1 objMm1Protocol = new MmsProtocolMm1();
            MmsMessage objMessage = new MmsMessage();
            MmsSlide objSlide = new MmsSlide();
            MmsConstants objConstants = new MmsConstants();
            object obj = null;
            
            objSlide.Clear();
            objSlide.AddAttachment(ReadInput("选择需要发送的彩信文件(完整路径): ", false), ref obj);
            objSlide.AddText(ReadInput("输入文本内容(可选): ", true));
            
            objMessage.Clear();
            objMessage.AddRecipient(ReadInput("输入接收号码(号码必须以+86开头): ", false), objConstants.asMMS_RECIPIENT_TO);
            objMessage.Subject = ReadInput("输入彩信主提: ", true);
            obj = objSlide;
            objMessage.AddSlide(ref obj);

            objMm1Protocol.Device = ReadDevice(objMm1Protocol);//选择连接设备，注意发送彩信不可以直接连COM口            
            objMm1Protocol.ProviderMMSC = ReadInput("输入彩信中心: ", false);//移动手机卡输入http://mmsc.monternet.com，联通手机卡输入http://mmsc.myuni.com.cn
            objMm1Protocol.ProviderAPN = ReadInput("gprs接入点: ", false);//移动手机卡输入cmwap，联通手机卡输入UNIWAP
            objMm1Protocol.ProviderWAPGateway = ReadInput("网关地址: ", false);//输入10.0.0.172
            objMm1Protocol.LogFile = "c:\\mmsmm1.log"; //记录到日志

            // 连接
            objMm1Protocol.Connect();
            Console.WriteLine("正在连接...");
            Console.WriteLine("返回结果: " + objMm1Protocol.LastError + " (" + objMm1Protocol.GetErrorDescription(objMm1Protocol.LastError) + ")");
            if (objMm1Protocol.LastError != 0)
            {
                Console.WriteLine("Ready.");
                System.Threading.Thread.Sleep(3000); 
                return;
            }

            // Send
            obj = objMessage;
            Console.WriteLine("正在发送...");
            objMm1Protocol.Send(ref obj);
            Console.WriteLine("返回结果: " + objMm1Protocol.LastError + " (" + objMm1Protocol.GetErrorDescription(objMm1Protocol.LastError) + ")");

            // Disconnect
            objMm1Protocol.Disconnect();
            Console.WriteLine("断开连接.");

            Console.WriteLine("Ready.");
            System.Threading.Thread.Sleep(3000); 
        }

        static private string ReadInput(string strTitle, bool bAllowEmpty)
        {
            String strInput, strReturn = "";

            Console.WriteLine(strTitle);
            do
            {
                Console.Write("  > ");
                strInput = Console.ReadLine();
                if (strInput.Length > 1)
                    strReturn = strInput;
            } while (strReturn == "" && !bAllowEmpty);

            return strReturn;
        }

        static private string ReadDevice(xssmsmms.MmsProtocolMm1 objMm1Protocol)
        {
            String strInput = "", strDevice = "";
            System.Int32 j;

            Console.WriteLine("选择设备(发送彩信不可以直接连COM口): ");

            for (j = 0; j < objMm1Protocol.GetDeviceCount(); j++)
            {
                Console.WriteLine("  " + j.ToString() + ": " + objMm1Protocol.GetDevice(j).ToString());
            }

            while (strDevice == "")
            {
                Console.Write("  > ");
                strInput = Console.ReadLine();
                if (System.Int32.Parse(strInput) < j)
                    strDevice = objMm1Protocol.GetDevice(System.Int32.Parse(strInput));
            }
            Console.WriteLine("  选择设备: " + strDevice + "\r\n");

            return strDevice;
        }
    }
}
