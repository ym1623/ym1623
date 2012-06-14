///send sms demo

using System;
using System.Collections.Generic;
using System.Text;
using xssmsmms;

namespace csharpsms
{
    class Program
    {
        /// <summary>
        /// The main entry point for the application.
        /// </summary>


        [STAThread]
        static void Main(string[] args)
        {
            SmsProtocolGsm objGsmProtocol = new xssmsmms.SmsProtocolGsm(); 
            SmsMessage objSmsMessage = new xssmsmms.SmsMessage();
            SmsConstants objConstants = new xssmsmms.SmsConstants();
            SmsDeliveryStatus objDeliveryStatus;
            object obj;
            string strMessageRef;

            // 选择连接设备
            objGsmProtocol.Device = ReadDevice(objGsmProtocol);           
            // 定义日志文件
            objGsmProtocol.LogFile = "C:\\SMSLog.txt";

            

            // 短信息参数设置
            objSmsMessage.Recipient = ReadInput("增加发送号码(号码必须以+86开头): ", false);
            objSmsMessage.Format = objConstants.asMESSAGEFORMAT_UNICODE_MULTIPART; // 支持中文超长短信
            objSmsMessage.Data = "这是一条测试信息";
            objSmsMessage.RequestDeliveryStatus = ReadYesNo("是否需要短信回执(y/n)? ") ? -1 : 0;

            // 发送信息
            Console.WriteLine("正在发送...");
            obj = objSmsMessage;
            strMessageRef = objGsmProtocol.Send(ref obj);
            Console.WriteLine("发所结果： " + objGsmProtocol.LastError + " (" + objGsmProtocol.GetErrorDescription(objGsmProtocol.LastError) + ")");

            if (objGsmProtocol.LastError == 0)
            {
                Console.WriteLine("信息回执: " + strMessageRef);
                do
                {
                    if ((objDeliveryStatus = (SmsDeliveryStatus)objGsmProtocol.QueryStatus(strMessageRef)) == null)
                    {
                        Console.WriteLine("检测回执失败");
                    }
                    else
                    {
                        Console.WriteLine("接收状态 (" + strMessageRef + "): " + objDeliveryStatus.Status.ToString() + " (" + objDeliveryStatus.StatusDescription + ")");
                        if (objDeliveryStatus.IsCompleted == 0)
                            System.Threading.Thread.Sleep(5000);
                    }
                } while (objDeliveryStatus != null && objDeliveryStatus.IsCompleted == 0);
            }

            Console.WriteLine("等待...");
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

        static private bool ReadYesNo(string strTitle)
        {
            string strInput;
            Console.Write(strTitle);
            strInput = Console.ReadLine();
            Console.WriteLine();
            if (strInput.Length > 0 && (strInput[0] == 'y' || strInput[0] == 'Y'))
                return true;
            return false;
        }

        static private string ReadDevice(xssmsmms.SmsProtocolGsm objGsmProtocol)
        {
            String strInput = "", strDevice = "";
            System.Int32 i, j;

            Console.WriteLine("选择设备: ");
            for (i = 1; i <= 8; i++)
            {
                Console.WriteLine("  " + i.ToString() + ": COM" + i.ToString());
            }
            for (j = 0; j <= objGsmProtocol.GetDeviceCount() - 1; j++)
            {
                Console.WriteLine("  " + (i + j).ToString() + ": " + objGsmProtocol.GetDevice(j).ToString());
            }

            while (strDevice == "")
            {
                Console.Write("  > ");
                strInput = Console.ReadLine();
                if ((System.Int32.Parse(strInput) < i))
                    strDevice = "COM" + (System.Int32.Parse(strInput)).ToString();
                else if (System.Int32.Parse(strInput) < i + j)
                    strDevice = objGsmProtocol.GetDevice(System.Int32.Parse(strInput) - i);
            }
            Console.WriteLine(" 选择设备: " + strDevice + "\r\n");

            return strDevice;
        }


    }
}
