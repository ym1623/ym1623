Imports xssmsmms

Module Module1

    Sub Main()

        Dim objGsmProtocol As SmsProtocolGsm = New SmsProtocolGsm
        Dim objSmsMessage As SmsMessage = New SmsMessage
        Dim objConstants As SmsConstants = New SmsConstants
        Dim objDeliveryStatus As SmsDeliveryStatus = Nothing
        Dim strMessageRef

        objGsmProtocol.Clear()
        objGsmProtocol.Device = ReadDevice(objGsmProtocol)
        
        objGsmProtocol.LogFile = "C:\SMSLog.txt"

        objSmsMessage.Clear()
        objSmsMessage.Recipient = ReadInput("输入接收者号码，号码必须以+86开头", False)
        objSmsMessage.Format = objConstants.asMESSAGEFORMAT_UNICODE_MULTIPART
        objSmsMessage.Data = "短信测试"
        objSmsMessage.RequestDeliveryStatus = ReadYesNo("是否需要到达回执 (y/n)? ")


        Console.WriteLine("发送...")
        strMessageRef = objGsmProtocol.Send(objSmsMessage)
        Console.WriteLine("发送结果: " & objGsmProtocol.LastError & " (" & objGsmProtocol.GetErrorDescription(objGsmProtocol.LastError) & ")")

        If (objGsmProtocol.LastError = 0) Then

            Console.WriteLine("Message id: " + strMessageRef)
            Do
                objDeliveryStatus = objGsmProtocol.QueryStatus(strMessageRef)
                If (objGsmProtocol.LastError <> 0) Then
                    Console.WriteLine("无法获取达到达回执，错误: " & objGsmProtocol.LastError)
                Else
                    Console.WriteLine("状态: (" & strMessageRef & "): " & objDeliveryStatus.Status.ToString() & " (" & objDeliveryStatus.StatusDescription & ")")
                    If (Not objDeliveryStatus.IsCompleted) Then
                        System.Threading.Thread.Sleep(5000)
                    End If
                End If
            Loop Until (objDeliveryStatus.IsCompleted)
        End If

        Console.WriteLine("等待.")
        System.Threading.Thread.Sleep(3000)
    End Sub

    Private Function ReadDevice(ByVal objGsmProtocol) As String
        Dim strInput = "", strDevice = ""
        Dim i, j As System.Int32

        Console.WriteLine("选择设备: ")
        For i = 1 To 8
            Console.WriteLine("  " & i.ToString & ": COM" & i.ToString())
        Next
        For j = 0 To objGsmProtocol.GetDeviceCount - 1
            Console.WriteLine("  " & (i + j).ToString & ": " & objGsmProtocol.GetDevice(j).ToString())
        Next

        While (strDevice = "")
            Console.Write("  > ")
            strInput = Console.ReadLine()

            If (System.Int32.Parse(strInput) < i) Then
                strDevice = "COM" & (System.Int32.Parse(strInput)).ToString
            ElseIf (System.Int32.Parse(strInput) < i + j) Then
                strDevice = objGsmProtocol.GetDevice(System.Int32.Parse(strInput) - i)
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

    Private Function ReadYesNo(ByRef strTitle) As Boolean
        Dim strInput As String
        Console.Write(strTitle)
        strInput = Console.ReadLine()
        Console.WriteLine()
        If (strInput.StartsWith("y") Or strInput.StartsWith("Y")) Then
            ReadYesNo = True
            Exit Function
        End If
        ReadYesNo = False
    End Function


End Module
