VERSION 5.00
Object = "{831FDD16-0C5C-11D2-A9FC-0000F8754DA1}#2.0#0"; "mscomctl.ocx"
Begin VB.Form FormGsm 
   Caption         =   "Form1"
   ClientHeight    =   7200
   ClientLeft      =   60
   ClientTop       =   345
   ClientWidth     =   9255
   LinkTopic       =   "Form1"
   ScaleHeight     =   7200
   ScaleWidth      =   9255
   StartUpPosition =   3  'Windows Default
   Begin VB.Frame Frame1 
      Caption         =   "GSM Modem/Phone Connection Properties"
      Height          =   1248
      Left            =   0
      TabIndex        =   17
      Top             =   0
      Width           =   9255
      Begin VB.ComboBox comboDevice 
         Height          =   315
         Left            =   1440
         TabIndex        =   20
         Top             =   360
         Width           =   4800
      End
      Begin VB.ComboBox comboSpeed 
         Height          =   315
         Left            =   7800
         TabIndex        =   19
         Top             =   360
         Width           =   1215
      End
      Begin VB.CommandButton buttonPincode 
         Caption         =   "Enter &Pincode..."
         Height          =   315
         Left            =   1440
         TabIndex        =   18
         Top             =   800
         Width           =   1440
      End
      Begin VB.Label Label1 
         Caption         =   "&Device:"
         Height          =   255
         Left            =   315
         TabIndex        =   22
         Top             =   360
         Width           =   855
      End
      Begin VB.Label Label4 
         Caption         =   "Device &Speed:"
         Height          =   255
         Left            =   6600
         TabIndex        =   21
         Top             =   360
         Width           =   1215
      End
   End
   Begin VB.Frame Frame2 
      Caption         =   "Send Message"
      Height          =   1875
      Left            =   0
      TabIndex        =   9
      Top             =   1260
      Width           =   9255
      Begin VB.CommandButton buttonSend 
         Caption         =   "Se&nd"
         Height          =   315
         Left            =   1440
         TabIndex        =   13
         Top             =   1320
         Width           =   1200
      End
      Begin VB.CommandButton buttonSendOptions 
         Caption         =   "&Options..."
         Height          =   315
         Left            =   2760
         TabIndex        =   12
         Top             =   1320
         Width           =   1200
      End
      Begin VB.TextBox textRecipient 
         Height          =   315
         Left            =   1440
         TabIndex        =   11
         Text            =   "<Recipient's phone number>"
         Top             =   360
         Width           =   2895
      End
      Begin VB.TextBox textMessage 
         BeginProperty Font 
            Name            =   "Microsoft Sans Serif"
            Size            =   8.25
            Charset         =   0
            Weight          =   400
            Underline       =   0   'False
            Italic          =   0   'False
            Strikethrough   =   0   'False
         EndProperty
         Height          =   495
         Left            =   1440
         TabIndex        =   10
         Text            =   "<Enter your message here>"
         Top             =   720
         Width           =   7608
      End
      Begin VB.Label Label2 
         Caption         =   "R&ecipient:"
         Height          =   255
         Left            =   240
         TabIndex        =   16
         Top             =   360
         Width           =   975
      End
      Begin VB.Label Label3 
         Caption         =   "&Message:"
         Height          =   255
         Left            =   240
         TabIndex        =   15
         Top             =   720
         Width           =   975
      End
      Begin VB.Label Label9 
         Caption         =   "NOTE: Use international number format. For instance: to send to              07797882390 in the UK, use +447797882390."
         Height          =   375
         Left            =   4440
         TabIndex        =   14
         Top             =   1320
         Width           =   4575
      End
   End
   Begin VB.Frame Frame3 
      Caption         =   "Receive Messages"
      Height          =   2665
      Left            =   0
      TabIndex        =   6
      Top             =   3180
      Width           =   9255
      Begin MSComctlLib.ListView ListView1 
         Height          =   1815
         Left            =   1440
         TabIndex        =   23
         Top             =   240
         Width           =   7635
         _ExtentX        =   13467
         _ExtentY        =   3201
         LabelWrap       =   -1  'True
         HideSelection   =   -1  'True
         _Version        =   393217
         ForeColor       =   -2147483640
         BackColor       =   -2147483643
         BorderStyle     =   1
         Appearance      =   1
         NumItems        =   0
      End
      Begin VB.CommandButton buttonReceive 
         Caption         =   "&Receive"
         Height          =   315
         Left            =   1440
         TabIndex        =   8
         Top             =   2160
         Width           =   1200
      End
      Begin VB.CommandButton buttonReceiveOptions 
         Caption         =   "Op&tions..."
         Height          =   315
         Left            =   2760
         TabIndex        =   7
         Top             =   2160
         Width           =   1200
      End
   End
   Begin VB.Frame Frame4 
      Caption         =   "Results and Logging"
      Height          =   1200
      Left            =   0
      TabIndex        =   0
      Top             =   5880
      Width           =   9255
      Begin VB.TextBox textLogfile 
         Height          =   315
         Left            =   1440
         TabIndex        =   2
         Top             =   720
         Width           =   6255
      End
      Begin VB.CommandButton buttonView 
         Caption         =   "&View"
         Height          =   315
         Left            =   7800
         TabIndex        =   1
         Top             =   720
         Width           =   1200
      End
      Begin VB.Label Label5 
         Caption         =   "Res&ult:"
         Height          =   255
         Left            =   240
         TabIndex        =   5
         Top             =   360
         Width           =   1095
      End
      Begin VB.Label Label6 
         Caption         =   "&Logfile:"
         Height          =   255
         Left            =   240
         TabIndex        =   4
         Top             =   720
         Width           =   975
      End
      Begin VB.Label textResult 
         BorderStyle     =   1  'Fixed Single
         Height          =   315
         Left            =   1440
         TabIndex        =   3
         Top             =   360
         Width           =   7575
      End
   End
End
Attribute VB_Name = "FormGsm"
Attribute VB_GlobalNameSpace = False
Attribute VB_Creatable = False
Attribute VB_PredeclaredId = True
Attribute VB_Exposed = False
Public objConstants As ASmsCtrl.SmsConstants
Public objGsmOut As ASmsCtrl.GsmOut
Public objGsmIn As ASmsCtrl.GsmIn

Private Declare Function GetTempPath Lib "kernel32" Alias "GetTempPathA" (ByVal nBufferLength As Long, ByVal lpBuffer As String) As Long
Private Const MAX_PATH = 260

Dim ShowReference As Boolean

Private Function SetDefaultLogFile()

Dim Buffer As String
Buffer = Space(MAX_PATH)

If GetTempPath(MAX_PATH, Buffer) <> 0 Then
    textLogfile.Text = Left$(Buffer, InStr(Buffer, vbNullChar) - 1) & "GsmLog.txt"
Else
    textLogfile.Text = "C:\SmppLog.txt"
End If
End Function

Private Sub buttonPincode_Click()

    DialogPincode.Show vbModal
    
    If (DialogPincode.EnterPin = True) Then
        Screen.MousePointer = vbHourglass
        buttonPincode.Enabled = False
        objGsmOut.LogFile = textLogfile.Text
        objGsmOut.Device = comboDevice.Text
        If (comboSpeed.Text = "Default") Then
            objGsmOut.DeviceSpeed = 0
        Else
            objGsmOut.DeviceSpeed = comboSpeed.Text
        End If
                
        objGsmOut.EnterPin (DialogPincode.textPin)
        GetResult (True)
        Screen.MousePointer = vbArrow
        buttonPincode.Enabled = True
    End If
    
    
End Sub

Private Sub buttonReceive_Click()
   Dim NumMessages As Long
    Dim i As Long
    
    buttonReceive.Enabled = False
    
    Screen.MousePointer = vbHourglass
    
    ListView.ListItems.Clear
    
    objGsmIn.Device = comboDevice.Text                  ' Set Device
     
    objGsmIn.LogFile = textLogfile.Text                 ' Set Logfile
   
    If comboSpeed.Text = "Default" Then                 ' Set DeviceSpeed
        objGsmIn.DeviceSpeed = 0
    Else
        objGsmIn.DeviceSpeed = comboSpeed.Text
    End If
          
    objGsmIn.Storage = RecvConfig.comboStore.ListIndex             ' Set selected message store
    objGsmIn.DeleteAfterReceive = RecvConfig.checkDelete.Value     ' Delete messages from storage after receive
    
    objGsmIn.Receive                                    ' Retrieve messages
        
    If GetResult(False) = 0 Then                     ' Success?
            
        objGsmIn.GetFirstMessage
        
        While GetResult(False) = 0
        
            Dim lList As ListItem
        
            Set lList = ListView.ListItems.Add(, , objGsmIn.MessageTime)   ' Add data to list control
        
            lList.SubItems(1) = objGsmIn.MessageSender
            lList.SubItems(2) = objGsmIn.MessageData
            
            objGsmIn.GetNextMessage
        
        Wend
    End If
                
    Screen.MousePointer = vbDefault
    
    buttonReceive.Enabled = True
    
End Sub

Private Sub buttonReceiveOptions_Click()
    RecvConfig.Show
End Sub

Private Sub buttonSend_Click()
    Dim MessageType As Long
    
    buttonSend.Enabled = False
    
    textResult.Caption = "Sending message, Please wait..."
    textResult.Refresh

   ' Set Device
    objGsmOut.Device = comboDevice.Text
    
    ' Set LogFile
    objGsmOut.LogFile = textLogfile.Text
    
    ' Set Speed
    If comboSpeed.ListIndex = 0 Then
        objGsmOut.DeviceSpeed = 0               ' use default speed
    Else
        objGsmOut.DeviceSpeed = comboSpeed.List(comboSpeed.ListIndex)
    End If
        
    
    MessageType = objConstants.asMESSAGETYPE_TEXT
       
    If SendConfig.checkMultipart.Value = 1 Then
        MessageType = objConstants.asMESSAGETYPE_TEXT_MULTIPART
    End If
            
    If SendConfig.checkFlash.Value = 1 Then
        MessageType = objConstants.asMESSAGETYPE_TEXT_FLASH
    End If
    
    ' Set Delivery Report
    objGsmOut.RequestStatusReport = SendConfig.checkReport.Value
    
    ' Set recipient
    objGsmOut.MessageRecipient = textRecipient.Text
    
    ' Set Message parameters
    objGsmOut.MessageData = textMessage.Text
    
    ' Set Message Type
    
    objGsmOut.MessageType = MessageType
    
        ' Send the message
    objGsmOut.Send
        
    ' Display result
    ShowReference = True
    GetResult (True)
    ShowReference = False
             
    buttonSend.Enabled = True
End Sub

Private Sub buttonSendOptions_Click()
    SendConfig.Show
End Sub

Private Sub Form_Load()
    Dim lDeviceCount As Long
    Dim i As Long
            
    ShowReference = False
    
    Set objGsmOut = CreateObject("ActiveXperts.GsmOut")
    Set objGsmIn = CreateObject("ActiveXperts.GsmIn")
    Set objConstants = CreateObject("ActiveXperts.SmsConstants")
    
    lDeviceCount = objGsmOut.GetDeviceCount()  ' Get number of  devices
    
    For i = 0 To lDeviceCount - 1
        comboDevice.AddItem (objGsmOut.GetDevice(i)) ' Add devices to list box
    Next
             
    comboDevice.AddItem ("COM1")        ' Add serial devices
    comboDevice.AddItem ("COM2")
    comboDevice.AddItem ("COM3")
    comboDevice.AddItem ("COM4")
    comboDevice.AddItem ("COM5")
    comboDevice.AddItem ("COM6")
    comboDevice.AddItem ("COM7")
    comboDevice.AddItem ("COM8")
    
    comboDevice.ListIndex = 0
        
    comboSpeed.AddItem ("Default")      ' Setup devicespeed combo
    comboSpeed.AddItem ("1200")
    comboSpeed.AddItem ("2400")
    comboSpeed.AddItem ("9600")
    comboSpeed.AddItem ("19200")
    comboSpeed.AddItem ("38400")
    comboSpeed.AddItem ("57600")
    comboSpeed.AddItem ("115200")
    
    comboSpeed.ListIndex = 0
    
    SetDefaultLogFile
    
End Sub

Public Function GetResult(bSend As Boolean) As Long
    
    Dim lResult As Long
    
    If (bSend = True) Then
        lResult = objGsmOut.LastError
    Else
        lResult = objGsmIn.LastError
    End If
    
     If (lResult = 0 Or lResult = 23140) Then
        If (ShowReference = True) Then
            textResult.Caption = "SUCCESS, MessageReference = " & objGsmOut.MessageReference
        Else
            textResult.Caption = "SUCCESS"
        End If
    Else
        textResult.Caption = "ERROR " & lResult & " : " & objGsmIn.GetErrorDescription(lResult)     ' Set Result
    End If
    
    GetResult = lResult
    
End Function
    
Public Function FileExists(sFileName As String) As Boolean
  FileExists = CBool(Len(Dir$(sFileName))) And CBool(Len(sFileName))
End Function


Private Sub buttonView_Click()                 ' View logfile
    If FileExists(textLogfile.Text) = True Then
    Shell "notepad " + textLogfile.Text, vbNormalFocus
    End If
End Sub

Private Sub urlCompany_Click()
    Shell "explorer http://www.activexperts.com"
End Sub

