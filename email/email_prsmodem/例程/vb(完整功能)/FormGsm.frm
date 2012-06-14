VERSION 5.00
Object = "{831FDD16-0C5C-11D2-A9FC-0000F8754DA1}#2.0#0"; "MSCOMCTL.OCX"
Begin VB.Form FormGsm 
   BorderStyle     =   3  'Fixed Dialog
   Caption         =   "GSM Demo"
   ClientHeight    =   9150
   ClientLeft      =   45
   ClientTop       =   330
   ClientWidth     =   9360
   LinkTopic       =   "Form1"
   MaxButton       =   0   'False
   MinButton       =   0   'False
   ScaleHeight     =   9150
   ScaleWidth      =   9360
   ShowInTaskbar   =   0   'False
   StartUpPosition =   2  '屏幕中心
   Begin VB.Frame Frame5 
      Caption         =   "已发信息"
      Height          =   2115
      Left            =   60
      TabIndex        =   14
      Top             =   3540
      Width           =   9255
      Begin VB.CommandButton CommandQuery 
         Caption         =   "短信状态查询"
         Height          =   315
         Left            =   1440
         TabIndex        =   16
         Top             =   1680
         Width           =   2535
      End
      Begin MSComctlLib.ListView ListViewTx 
         Height          =   1275
         Left            =   1440
         TabIndex        =   15
         Top             =   360
         Width           =   7575
         _ExtentX        =   13361
         _ExtentY        =   2249
         View            =   3
         LabelWrap       =   -1  'True
         HideSelection   =   -1  'True
         FullRowSelect   =   -1  'True
         GridLines       =   -1  'True
         _Version        =   393217
         ForeColor       =   -2147483640
         BackColor       =   -2147483643
         BorderStyle     =   1
         Appearance      =   1
         NumItems        =   4
         BeginProperty ColumnHeader(1) {BDD1F052-858B-11D1-B16A-00C0F0283628} 
            Text            =   "参照值"
            Object.Width           =   2540
         EndProperty
         BeginProperty ColumnHeader(2) {BDD1F052-858B-11D1-B16A-00C0F0283628} 
            SubItemIndex    =   1
            Text            =   "号码"
            Object.Width           =   3316
         EndProperty
         BeginProperty ColumnHeader(3) {BDD1F052-858B-11D1-B16A-00C0F0283628} 
            SubItemIndex    =   2
            Text            =   "状态"
            Object.Width           =   3316
         EndProperty
         BeginProperty ColumnHeader(4) {BDD1F052-858B-11D1-B16A-00C0F0283628} 
            SubItemIndex    =   3
            Text            =   "时间"
            Object.Width           =   3316
         EndProperty
      End
   End
   Begin VB.Frame Frame1 
      Caption         =   "GSM Modem 连接设置"
      Height          =   1248
      Left            =   60
      TabIndex        =   0
      Top             =   0
      Width           =   9255
      Begin VB.ComboBox comboDevice 
         Height          =   315
         Left            =   1440
         TabIndex        =   2
         Top             =   360
         Width           =   4800
      End
      Begin VB.ComboBox comboSpeed 
         Height          =   315
         Left            =   7800
         TabIndex        =   4
         Top             =   360
         Width           =   1215
      End
      Begin VB.CommandButton buttonPincode 
         Caption         =   "输入Pin码"
         Height          =   315
         Left            =   1440
         TabIndex        =   5
         Top             =   800
         Width           =   1440
      End
      Begin VB.Label Label1 
         Caption         =   "设备:"
         Height          =   255
         Left            =   840
         TabIndex        =   1
         Top             =   360
         Width           =   495
      End
      Begin VB.Label Label4 
         Caption         =   "连接速率:"
         Height          =   255
         Left            =   6840
         TabIndex        =   3
         Top             =   360
         Width           =   855
      End
   End
   Begin VB.Frame Frame2 
      Caption         =   "发送短信"
      Height          =   2235
      Left            =   60
      TabIndex        =   6
      Top             =   1260
      Width           =   9255
      Begin VB.CommandButton CommandWAP 
         Caption         =   "WAP Push"
         Height          =   315
         Left            =   7800
         TabIndex        =   11
         Top             =   720
         Width           =   1215
      End
      Begin VB.CommandButton buttonSend 
         Caption         =   "发送"
         Height          =   315
         Left            =   1440
         TabIndex        =   12
         Top             =   1800
         Width           =   1200
      End
      Begin VB.CommandButton buttonSendOptions 
         Caption         =   "选项"
         Height          =   315
         Left            =   2760
         TabIndex        =   13
         Top             =   1800
         Width           =   1200
      End
      Begin VB.TextBox textRecipient 
         Height          =   315
         Left            =   1440
         TabIndex        =   8
         Text            =   "+8613901234567"
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
         Height          =   1035
         Left            =   1440
         MultiLine       =   -1  'True
         TabIndex        =   10
         Top             =   720
         Width           =   6225
      End
      Begin VB.Label Label7 
         Caption         =   "号码必须以+86开头"
         Height          =   255
         Left            =   4560
         TabIndex        =   27
         Top             =   360
         Width           =   2055
      End
      Begin VB.Label Label2 
         Caption         =   "接收号码:"
         Height          =   255
         Left            =   480
         TabIndex        =   7
         Top             =   360
         Width           =   855
      End
      Begin VB.Label Label3 
         Caption         =   "短信内容:"
         Height          =   255
         Left            =   480
         TabIndex        =   9
         Top             =   720
         Width           =   855
      End
   End
   Begin VB.Frame Frame3 
      Caption         =   "接收信息"
      Height          =   2115
      Left            =   60
      TabIndex        =   17
      Top             =   5700
      Width           =   9255
      Begin VB.CommandButton buttonReceive 
         Caption         =   "接收"
         Height          =   315
         Left            =   1440
         TabIndex        =   19
         Top             =   1680
         Width           =   1200
      End
      Begin VB.CommandButton buttonReceiveOptions 
         Caption         =   "选项"
         Height          =   315
         Left            =   2760
         TabIndex        =   20
         Top             =   1680
         Width           =   1200
      End
      Begin MSComctlLib.ListView ListViewRx 
         Height          =   1260
         Left            =   1440
         TabIndex        =   18
         Top             =   360
         Width           =   7605
         _ExtentX        =   13414
         _ExtentY        =   2223
         View            =   3
         LabelWrap       =   -1  'True
         HideSelection   =   -1  'True
         FullRowSelect   =   -1  'True
         GridLines       =   -1  'True
         _Version        =   393217
         ForeColor       =   -2147483640
         BackColor       =   -2147483643
         BorderStyle     =   1
         Appearance      =   1
         NumItems        =   3
         BeginProperty ColumnHeader(1) {BDD1F052-858B-11D1-B16A-00C0F0283628} 
            Text            =   "时间"
            Object.Width           =   3881
         EndProperty
         BeginProperty ColumnHeader(2) {BDD1F052-858B-11D1-B16A-00C0F0283628} 
            SubItemIndex    =   1
            Text            =   "号码"
            Object.Width           =   2646
         EndProperty
         BeginProperty ColumnHeader(3) {BDD1F052-858B-11D1-B16A-00C0F0283628} 
            SubItemIndex    =   2
            Text            =   "内容"
            Object.Width           =   14700
         EndProperty
      End
   End
   Begin VB.Frame Frame4 
      Caption         =   "返回值"
      Height          =   1200
      Left            =   120
      TabIndex        =   21
      Top             =   7920
      Width           =   9255
      Begin VB.TextBox textLogfile 
         Height          =   315
         Left            =   1440
         TabIndex        =   25
         Top             =   720
         Width           =   6255
      End
      Begin VB.CommandButton buttonView 
         Caption         =   "查看日志"
         Height          =   315
         Left            =   7800
         TabIndex        =   26
         Top             =   720
         Width           =   1200
      End
      Begin VB.Label Label5 
         Caption         =   "返回值:"
         Height          =   255
         Left            =   480
         TabIndex        =   22
         Top             =   360
         Width           =   735
      End
      Begin VB.Label Label6 
         Caption         =   "日志文件:"
         Height          =   255
         Left            =   360
         TabIndex        =   24
         Top             =   720
         Width           =   855
      End
      Begin VB.Label textResult 
         BorderStyle     =   1  'Fixed Single
         Height          =   315
         Left            =   1440
         TabIndex        =   23
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
Public objConstants As xssmsmms.SmsConstants
Public objMessage As xssmsmms.SmsMessage
Public objGsm As xssmsmms.SmsProtocolGsm
Public objStatus As xssmsmms.SmsDeliveryStatus

Private Declare Function GetTempPath Lib "kernel32" Alias "GetTempPathA" (ByVal nBufferLength As Long, ByVal lpBuffer As String) As Long
Private Const MAX_PATH = 260

Dim ShowReference As Boolean

Private Function SetDefaultLogFile()

Dim Buffer As String
Buffer = Space(MAX_PATH)

If GetTempPath(MAX_PATH, Buffer) <> 0 Then
    TextLogfile.Text = Left$(Buffer, InStr(Buffer, vbNullChar) - 1) & "GsmLog.txt"
Else
    TextLogfile.Text = "C:\GsmLog.txt"
End If
End Function

Private Sub buttonPincode_Click()

    FormGsmPincode.Show vbModal
    
    If (FormGsmPincode.EnterPin = True) Then
        Screen.MousePointer = vbHourglass
        buttonPincode.Enabled = False
        objGsm.LogFile = TextLogfile.Text
        objGsm.Device = ComboDevice.Text
        If (comboSpeed.Text = "Default") Then
            objGsm.DeviceSpeed = 0
        Else
            objGsm.DeviceSpeed = comboSpeed.Text
        End If
                
        objGsm.EnterPin (FormGsmPincode.textPin)
        GetResult
        Screen.MousePointer = vbArrow
        buttonPincode.Enabled = True
    End If
End Sub

Private Sub buttonReceive_Click()
   Dim NumMessages As Long
    Dim i As Long
    
    buttonReceive.Enabled = False
    
    Screen.MousePointer = vbHourglass
    
    ListViewRx.ListItems.Clear
    
    objGsm.Device = ComboDevice.Text
    objGsm.LogFile = TextLogfile.Text
   
    If comboSpeed.Text = "Default" Then
        objGsm.DeviceSpeed = 0
    Else
        objGsm.DeviceSpeed = comboSpeed.Text
    End If
          
    objGsm.MessageStorage = FormGsmRecvConfig.comboStore.ListIndex
    objGsm.DeleteAfterReceive = FormGsmRecvConfig.checkDelete.Value
    objGsm.Receive
        
    If GetResult = 0 Then
            
        On Error Resume Next
        Set objMessage = objGsm.GetFirstMessage
        On Error GoTo 0
        
        While GetResult = 0
        
            Dim lList As ListItem
        
            Set lList = ListViewRx.ListItems.Add(, , objMessage.Time)
            
            lList.SubItems(1) = objMessage.Sender
            lList.SubItems(2) = objMessage.Data
            
            On Error Resume Next
            Set objMessage = objGsm.GetNextMessage
            On Error GoTo 0
        Wend
    End If
                
    Screen.MousePointer = vbDefault
    
    buttonReceive.Enabled = True
    
End Sub

Private Sub buttonReceiveOptions_Click()
    FormGsmRecvConfig.Show
End Sub

Private Sub buttonSend_Click()
    Dim MessageType As Long
    Dim strReference As String
        
    buttonSend.Enabled = False
    
    TextResult.Caption = "正在发送信息......"
    TextResult.Refresh

 
    objGsm.Device = ComboDevice.Text
    

    objGsm.LogFile = TextLogfile.Text
    

    If comboSpeed.ListIndex = 0 Then
        objGsm.DeviceSpeed = 0
        Else
        objGsm.DeviceSpeed = comboSpeed.List(comboSpeed.ListIndex)
    End If
        
 
    Set objMessage = CreateObject("XunsaiSMSMMS.SmsMessage")
     

    objMessage.Format = objConstants.asMESSAGEFORMAT_UNICODE_MULTIPART
    
    If FormSendConfig.checkMultipart.Value = 1 Then
        objMessage.Format = objConstants.asMESSAGEFORMAT_UNICODE_MULTIPART
    End If
            
    If FormSendConfig.checkFlash.Value = 1 Then
        objMessage.Format = objConstants.asMESSAGEFORMAT_UNICODE_MULTIPART_FLASH
    End If
    
    If FormSendConfig.checkUDH.Value = 1 Then
        objMessage.Format = objConstants.asMESSAGEFORMAT_DATA_UDH
    End If

    objMessage.RequestDeliveryStatus = FormSendConfig.checkReport.Value
        

    objMessage.Recipient = textRecipient.Text
    

    objMessage.Data = textMessage.Text
      

    strReference = objGsm.Send(objMessage)
        

    If GetResult() = 0 Then
        Dim lList As ListItem
        
        Set lList = ListViewTx.ListItems.Add(, , strReference)
        
        lList.SubItems(1) = objMessage.Recipient
        lList.Tag = 0
    End If
                 
    buttonSend.Enabled = True
End Sub

Private Sub buttonSendOptions_Click()
    FormSendConfig.Show
End Sub

Private Sub CommandPicture_Click()
    FormPicture.Show vbModal
    
    If (FormPicture.Result = True) Then
        
        textMessage.Text = FormPicture.strMessage
        
        FormSendConfig.checkFlash = 0
        FormSendConfig.checkMultipart = 0
        FormSendConfig.checkReport = 0
        FormSendConfig.checkUDH = 1
        
    End If
End Sub

Private Sub CommandQuery_Click()
    Dim i As Integer
    
    CommandQuery.Enabled = False
    Screen.MousePointer = vbHourglass
    
    For i = 1 To ListViewTx.ListItems.Count
        Dim lList As ListItem
        
        Set lList = ListViewTx.ListItems(i)
            
        If (lList.Tag = 0) Then
            Set objStatus = objGsm.QueryStatus(lList.Text)
          
            If (GetResult = 0) Then
                lList.SubItems(2) = objStatus.StatusDescription
                lList.SubItems(3) = objStatus.StatusCompletedTime
                
                lList.Tag = objStatus.IsCompleted
            End If
        End If
    Next
    
    Screen.MousePointer = vbDefault
    CommandQuery.Enabled = True
End Sub

Private Sub CommandRingtone_Click()
    FormRingtone.Show vbModal
    
    If (FormRingtone.Result = True) Then
        
        textMessage.Text = FormRingtone.strMessage
        
        FormSendConfig.checkFlash = 0
        FormSendConfig.checkMultipart = 0
        FormSendConfig.checkReport = 0
        FormSendConfig.checkUDH = 1
        
    End If
End Sub

Private Sub CommandWap_Click()
    FormWap.Show vbModal
    
    If (FormWap.Result = True) Then
        
        textMessage.Text = FormWap.strMessage
        
        FormSendConfig.checkFlash = 0
        FormSendConfig.checkMultipart = 0
        FormSendConfig.checkReport = 0
        FormSendConfig.checkUDH = 1
        
    End If
End Sub

Private Sub Form_Load()
    Dim lDeviceCount As Long
    Dim i As Long
            
    ShowReference = False
    
    Set objGsm = CreateObject("XunsaiSMSMMS.SmsProtocolGsm")
    Set objConstants = CreateObject("XunsaiSMSMMS.SmsConstants")
    
    lDeviceCount = objGsm.GetDeviceCount()
    
    For i = 0 To lDeviceCount - 1
        ComboDevice.AddItem (objGsm.GetDevice(i))
    Next
             
    FormSendConfig.checkMultipart = 1
    FormSendConfig.checkReport = 1
    
    ComboDevice.AddItem ("COM1")
    ComboDevice.AddItem ("COM2")
    ComboDevice.AddItem ("COM3")
    ComboDevice.AddItem ("COM4")
    ComboDevice.AddItem ("COM5")
    ComboDevice.AddItem ("COM6")
    ComboDevice.AddItem ("COM7")
    ComboDevice.AddItem ("COM8")
    
    ComboDevice.ListIndex = 0
        
    comboSpeed.AddItem ("Default")
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

Public Function GetResult() As Long
    
    Dim lResult As Long
    
    lResult = objGsm.LastError
    
     If (lResult = 0 Or lResult = 23140) Then
        TextResult.Caption = "成功"
 
    End If
    
    GetResult = lResult
   
End Function
    
Public Function FileExists(sFileName As String) As Boolean
  FileExists = CBool(Len(Dir$(sFileName))) And CBool(Len(sFileName))
End Function


Private Sub buttonView_Click()
    If FileExists(TextLogfile.Text) = True Then
    Shell "notepad " + TextLogfile.Text, vbNormalFocus
    End If
End Sub



Private Sub Form_Unload(Cancel As Integer)
    Set objGsm = Nothing
    Set objConstants = Nothing
End Sub
