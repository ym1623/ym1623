Imports xssmsmms

Module Module1

    Sub Main()

        Dim objMm1Protocol As MmsProtocolMm1 = New MmsProtocolMm1
        Dim objMessage As MmsMessage = New MmsMessage
        Dim objSlide As MmsSlide = New MmsSlide
        Dim objConstants As MmsConstants = New MmsConstants


        objSlide.Clear()
        objSlide.AddAttachment(ReadInput("输入要发送的彩信资源所在路径路径，使用绝对路径: ", False), 0)
        objSlide.AddText(ReadInput("输入彩信中的文本信息: ", True))

        objMessage.Clear()
        objMessage.AddRecipient(ReadInput("输入接收者号码，号码必须以+86开头: ", False), objConstants.asMMS_RECIPIENT_TO)
        objMessage.Subject = ReadInput("输入彩信主题: ", True)
        objMessage.AddSlide(objSlide)

        objMm1Protocol.Device = ReadDevice(objMm1Protocol)

        '移动彩信配置
        objMm1Protocol.ProviderMMSC = "http://mmsc.monternet.com"
        objMm1Protocol.ProviderAPN = "cmwap"
        objMm1Protocol.ProviderAPNAccount = ""
        objMm1Protocol.ProviderAPNPassword = ""
        objMm1Protocol.ProviderWAPGateway = "10.0.0.172"


        '记录到日志
        objMm1Protocol.LogFile = "c:\\mmsmm1.log"

        ' 拨号gprs
        objMm1Protocol.Connect()
        Console.WriteLine("正在连接...")
        Console.WriteLine("结果: " & objMm1Protocol.LastError & " (" & objMm1Protocol.GetErrorDescription(objMm1Protocol.LastError) & ")")
        If (objMm1Protocol.LastError <> 0) Then

            Console.WriteLine("等待.")
            System.Threading.Thread.Sleep(3000)
            Exit Sub
        End If

        ' 发送彩信
        Console.WriteLine("正在发送...")
        objMm1Protocol.Send(objMessage)
        Console.WriteLine("发送结果: " & objMm1Protocol.LastError & " (" & objMm1Protocol.GetErrorDescription(objMm1Protocol.LastError) & ")")

        ' 断开连接
        objMm1Protocol.Disconnect()
        Console.WriteLine("断开gprs.")

        Console.WriteLine("等待.")
        System.Threading.Thread.Sleep(3000)

    End Sub

    Private Function ReadDevice(ByVal objGsmProtocol) As String
        Dim strInput = "", strDevice = ""
        Dim j As System.Int32
        Console.WriteLine("选择设备: ")
        For j = 0 To objGsmProtocol.GetDeviceCount - 1
            Console.WriteLine("  " & j.ToString & ": " & objGsmProtocol.GetDevice(j).ToString())
        Next

        While (strDevice = "")
            Console.Write("  > ")
            strInput = Console.ReadLine()

            If (System.Int32.Parse(strInput) < j) Then
                strDevice = objGsmProtocol.GetDevice(System.Int32.Parse(strInput))
            End If

        End While
        Console.WriteLine("选择设备: " & strDevice & vbCrLf)
        ReadDevice = strDevice
    End Function


    Private Function ReadInput(ByVal strTitle, ByVal bAllowEmpty) As String

        Dim strInput As String = ""
        Dim strReturn As String = ""

        Console.WriteLine(strTitle)
        Do

            Console.Write("  > ")
            strInput = Console.ReadLine()
            If (strInput.Length > 1) Then
                strReturn = strInput
            End If
        Loop Until strReturn <> "" Or bAllowEmpty

        ReadInput = strReturn
    End Function

End Module
