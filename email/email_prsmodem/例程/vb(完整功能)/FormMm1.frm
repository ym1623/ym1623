VERSION 5.00
Object = "{F9043C88-F6F2-101A-A3C9-08002B2F49FB}#1.2#0"; "comdlg32.ocx"
Begin VB.Form FormMm1 
   BorderStyle     =   3  'Fixed Dialog
   Caption         =   "通过GPRS MODEM发送彩信"
   ClientHeight    =   7020
   ClientLeft      =   45
   ClientTop       =   435
   ClientWidth     =   8025
   LinkTopic       =   "Form1"
   MaxButton       =   0   'False
   MinButton       =   0   'False
   ScaleHeight     =   7020
   ScaleWidth      =   8025
   ShowInTaskbar   =   0   'False
   StartUpPosition =   3  '窗口缺省
   Begin VB.Frame Frame1 
      Caption         =   "GSM/GPRS Modem"
      Height          =   1215
      Left            =   60
      TabIndex        =   0
      Top             =   0
      Width           =   7875
      Begin VB.CommandButton CommandPincode 
         Caption         =   "输入Pin码"
         Height          =   315
         Left            =   960
         TabIndex        =   35
         Top             =   780
         Width           =   1815
      End
      Begin VB.ComboBox ComboDevice 
         Height          =   315
         Left            =   960
         TabIndex        =   2
         Top             =   360
         Width           =   6735
      End
      Begin VB.Label Label1 
         Caption         =   "Modem:"
         Height          =   255
         Left            =   360
         TabIndex        =   1
         Top             =   360
         Width           =   555
      End
   End
   Begin VB.Frame Frame2 
      Caption         =   "彩信拨号设置"
      Height          =   1815
      Left            =   60
      TabIndex        =   3
      Top             =   1260
      Width           =   7875
      Begin VB.CommandButton CommandSaveConfig 
         Caption         =   "另存为彩信配置文件"
         Height          =   315
         Left            =   3060
         TabIndex        =   15
         Top             =   1080
         Width           =   2055
      End
      Begin VB.CommandButton CommandLoadConfig 
         Caption         =   "载入彩信配置文件"
         Height          =   315
         Left            =   960
         TabIndex        =   14
         Top             =   1080
         Width           =   2055
      End
      Begin VB.TextBox TextAPN 
         Height          =   285
         Left            =   960
         TabIndex        =   5
         Text            =   "cmwap"
         Top             =   360
         Width           =   1875
      End
      Begin VB.TextBox TextGateway 
         Height          =   285
         Left            =   960
         TabIndex        =   11
         Text            =   "10.0.0.172"
         Top             =   720
         Width           =   1875
      End
      Begin VB.TextBox TextLogin 
         Height          =   285
         Left            =   3960
         TabIndex        =   7
         Top             =   360
         Width           =   1335
      End
      Begin VB.TextBox TextPassword 
         Height          =   285
         IMEMode         =   3  'DISABLE
         Left            =   6240
         PasswordChar    =   "*"
         TabIndex        =   9
         Top             =   360
         Width           =   1455
      End
      Begin VB.TextBox TextServer 
         Height          =   285
         Left            =   3960
         TabIndex        =   13
         Text            =   "http://mmsc.monternet.com/"
         Top             =   720
         Width           =   3735
      End
      Begin VB.Label Label2 
         Caption         =   "APN:"
         Height          =   255
         Left            =   180
         TabIndex        =   4
         Top             =   360
         Width           =   2055
      End
      Begin VB.Label Label3 
         Caption         =   "用户名:"
         Height          =   255
         Left            =   3240
         TabIndex        =   6
         Top             =   360
         Width           =   735
      End
      Begin VB.Label Label4 
         Caption         =   "密码:"
         Height          =   315
         Left            =   5760
         TabIndex        =   8
         Top             =   360
         Width           =   495
      End
      Begin VB.Label Label5 
         Caption         =   "网关:"
         Height          =   255
         Left            =   180
         TabIndex        =   10
         Top             =   720
         Width           =   735
      End
      Begin VB.Label Label6 
         Caption         =   "彩信中心:"
         Height          =   195
         Left            =   3000
         TabIndex        =   12
         Top             =   720
         Width           =   915
      End
   End
   Begin VB.Frame Frame3 
      Caption         =   "彩信"
      Height          =   2295
      Left            =   60
      TabIndex        =   16
      Top             =   3120
      Width           =   7875
      Begin VB.CommandButton CommandSend 
         Caption         =   "发送彩信"
         Height          =   375
         Left            =   960
         TabIndex        =   26
         Top             =   1800
         Width           =   1815
      End
      Begin VB.TextBox TextTo 
         Height          =   285
         Left            =   1320
         TabIndex        =   18
         Text            =   "+8613901234567"
         Top             =   360
         Width           =   2415
      End
      Begin VB.TextBox TextSubject 
         Height          =   285
         Left            =   960
         TabIndex        =   20
         Text            =   "彩信主题"
         Top             =   720
         Width           =   6795
      End
      Begin VB.TextBox TextBody 
         Height          =   255
         Left            =   960
         TabIndex        =   22
         Text            =   "这是一条测试彩信"
         Top             =   1080
         Width           =   6795
      End
      Begin VB.TextBox TextImage 
         Height          =   285
         Left            =   960
         TabIndex        =   24
         Top             =   1440
         Width           =   5595
      End
      Begin VB.CommandButton CommandBrowse 
         Caption         =   "游览"
         Height          =   315
         Left            =   6600
         TabIndex        =   25
         Top             =   1440
         Width           =   1155
      End
      Begin MSComDlg.CommonDialog CommonDialog1 
         Left            =   4080
         Top             =   1980
         _ExtentX        =   847
         _ExtentY        =   847
         _Version        =   393216
      End
      Begin VB.Label Label8 
         Caption         =   "号码必须以+86开头"
         Height          =   255
         Left            =   3960
         TabIndex        =   36
         Top             =   360
         Width           =   1695
      End
      Begin VB.Label Label7 
         Caption         =   "接收者号码:"
         Height          =   195
         Left            =   180
         TabIndex        =   17
         Top             =   360
         Width           =   1035
      End
      Begin VB.Label Label9 
         Caption         =   "主题:"
         Height          =   315
         Left            =   180
         TabIndex        =   19
         Top             =   720
         Width           =   795
      End
      Begin VB.Label Label10 
         Caption         =   "文本:"
         Height          =   315
         Left            =   180
         TabIndex        =   21
         Top             =   1080
         Width           =   975
      End
      Begin VB.Label Label11 
         Caption         =   "文件:"
         Height          =   195
         Left            =   180
         TabIndex        =   23
         Top             =   1440
         Width           =   555
      End
   End
   Begin VB.Frame Frame4 
      Caption         =   "返回值"
      Height          =   1515
      Left            =   60
      TabIndex        =   27
      Top             =   5460
      Width           =   7875
      Begin VB.TextBox TextResult 
         Height          =   285
         Left            =   1320
         TabIndex        =   29
         Text            =   "N/A"
         Top             =   360
         Width           =   6435
      End
      Begin VB.TextBox TextResponse 
         Height          =   285
         Left            =   1320
         TabIndex        =   31
         Text            =   "N/A"
         Top             =   720
         Width           =   6435
      End
      Begin VB.TextBox TextLogfile 
         Height          =   285
         Left            =   1320
         TabIndex        =   33
         Top             =   1080
         Width           =   5235
      End
      Begin VB.CommandButton CommandView 
         Caption         =   "查看日志"
         Height          =   315
         Left            =   6600
         TabIndex        =   34
         Top             =   1080
         Width           =   1155
      End
      Begin VB.Label Label12 
         Caption         =   "返回值:"
         Height          =   195
         Left            =   180
         TabIndex        =   28
         Top             =   360
         Width           =   915
      End
      Begin VB.Label Label13 
         Caption         =   "网关响应:"
         Height          =   255
         Left            =   180
         TabIndex        =   30
         Top             =   720
         Width           =   975
      End
      Begin VB.Label Label14 
         Caption         =   "日志:"
         Height          =   255
         Left            =   180
         TabIndex        =   32
         Top             =   1080
         Width           =   675
      End
   End
End
Attribute VB_Name = "FormMm1"
Attribute VB_GlobalNameSpace = False
Attribute VB_Creatable = False
Attribute VB_PredeclaredId = True
Attribute VB_Exposed = False
Option Explicit

'/////////////////////////////////////////////////////////////////////////////////////////////////////////

Private Declare Function GetTempPath Lib "kernel32" Alias "GetTempPathA" (ByVal nBufferLength As Long, ByVal lpBuffer As String) As Long
Private Const MAX_PATH = 260

'/////////////////////////////////////////////////////////////////////////////////////////////////////////

Public objConnection As xssmsmms.MmsProtocolMm1
Public objConstants As xssmsmms.MmsConstants
Public objSlide As xssmsmms.MmsSlide
Public objMessage As xssmsmms.MmsMessage

'/////////////////////////////////////////////////////////////////////////////////////////////////////////

Private Sub CommandBrowse_Click()
    CommonDialog1.DefaultExt = "*.*"
    CommonDialog1.DialogTitle = "Select Attachment"
    CommonDialog1.Filter = "All Files (*.*)|*.*"
    CommonDialog1.ShowOpen
    
    TextImage.Text = CommonDialog1.FileName
End Sub

'/////////////////////////////////////////////////////////////////////////////////////////////////////////

Private Sub LoadProviderConfigFromFile(strConfigFile As String)
    objConnection.Clear
    objConnection.LogFile = TextLogfile.Text
    objConnection.ProviderLoadConfig strConfigFile
    
    If (GetResult <> 0) Then
        Exit Sub
    End If
    
    TextServer.Text = objConnection.ProviderMMSC
    TextAPN.Text = objConnection.ProviderAPN
    TextLogin.Text = objConnection.ProviderAPNAccount
    TextPassword.Text = objConnection.ProviderAPNPassword
    TextGateway.Text = objConnection.ProviderWAPGateway
End Sub

'/////////////////////////////////////////////////////////////////////////////////////////////////////////

Private Sub SaveProviderConfigToFile(strConfigFile As String)
    objConnection.ProviderMMSC = TextServer.Text
    objConnection.ProviderAPN = TextAPN.Text
    objConnection.ProviderAPNAccount = TextLogin.Text
    objConnection.ProviderAPNPassword = TextPassword.Text
    objConnection.ProviderWAPGateway = TextGateway.Text
    
    objConnection.LogFile = TextLogfile.Text
    
    objConnection.ProviderSaveConfig strConfigFile
    
    GetResult
End Sub

'/////////////////////////////////////////////////////////////////////////////////////////////////////////

Private Sub CommandLoadConfig_Click()
    CommonDialog1.DefaultExt = "*.mm1"
    CommonDialog1.DialogTitle = "Select MM1 Provider File"
    CommonDialog1.Filter = "MM1 Provider Files (*.mm1)|*.mm1"
    CommonDialog1.ShowOpen
    
    LoadProviderConfigFromFile CommonDialog1.FileName
End Sub

'/////////////////////////////////////////////////////////////////////////////////////////////////////////

Private Sub CommandSaveConfig_Click()
    CommonDialog1.DefaultExt = "*.mm1"
    CommonDialog1.DialogTitle = "Select MM1 Provider File"
    CommonDialog1.Filter = "MM1 Provider Files (*.mm1)|*.mm1"
    CommonDialog1.ShowSave
    
    SaveProviderConfigToFile CommonDialog1.FileName
End Sub

'/////////////////////////////////////////////////////////////////////////////////////////////////////////

Private Sub CommandPincode_Click()
    FormGsmPincode.Show vbModal
    
    If (FormGsmPincode.EnterPin = True) Then
        Screen.MousePointer = vbHourglass
        CommandPincode.Enabled = False
        
        objConnection.LogFile = TextLogfile.Text
        objConnection.Device = ComboDevice.Text
        objConnection.EnterPin (FormGsmPincode.textPin)
        
        GetResult
        
        Screen.MousePointer = vbArrow
        CommandPincode.Enabled = True
    End If
End Sub

'/////////////////////////////////////////////////////////////////////////////////////////////////////////

Private Function GetResult()
    Dim lError As Long
    
    lError = objConnection.LastError
    
    TextResult.Text = lError & " (" & objConnection.GetErrorDescription(lError) & ")"
    TextResponse.Text = objConnection.ProviderResponse
    
    GetResult = lError
End Function

'/////////////////////////////////////////////////////////////////////////////////////////////////////////

Private Sub CommandSend_Click()
    MousePointer = vbHourglass
    CommandSend.Enabled = False
        
  
    objConnection.Device = ComboDevice.Text
    
  
    objConnection.ProviderMMSC = TextServer.Text
    objConnection.ProviderAPN = TextAPN.Text
    objConnection.ProviderWAPGateway = TextGateway.Text
    objConnection.ProviderAPNAccount = TextLogin.Text
    objConnection.ProviderAPNPassword = TextPassword.Text
    

    objConnection.LogFile = TextLogfile.Text
    

    objMessage.Clear
    
    objMessage.AddRecipient TextTo.Text
    objMessage.Subject = TextSubject.Text
    
    objSlide.Duration = 5
    objSlide.AddAttachment TextImage.Text
    objSlide.AddText TextBody.Text
    
    objMessage.AddSlide objSlide
    
    objConnection.Connect
    
    If (GetResult = 0) Then
    
        objConnection.Send objMessage
    
        GetResult
        
        objConnection.Disconnect
    End If
    
    CommandSend.Enabled = True
    MousePointer = vbDefault
End Sub

'/////////////////////////////////////////////////////////////////////////////////////////////////////////

Private Sub CommandView_Click()
    If FileExists(TextLogfile.Text) = True Then
    Shell "notepad " + TextLogfile.Text, vbNormalFocus
    End If
End Sub

'/////////////////////////////////////////////////////////////////////////////////////////////////////////

Private Sub Form_Load()
    Dim numDevices
    Dim i
    
    Set objConnection = CreateObject("XunsaiSMSMMS.MmsProtocolMm1")
    Set objConstants = CreateObject("XunsaiSMSMMS.MmsConstants")
    Set objMessage = CreateObject("XunsaiSMSMMS.MmsMessage")
    Set objSlide = CreateObject("XunsaiSMSMMS.MmsSlide")
    
    numDevices = objConnection.GetDeviceCount
    
    For i = 0 To numDevices - 1
        ComboDevice.AddItem (objConnection.GetDevice(i))
        ComboDevice.ListIndex = 0
    Next
       
    SetDefaultLogFile
End Sub



Public Function FileExists(sFileName As String) As Boolean
  FileExists = CBool(Len(Dir$(sFileName))) And CBool(Len(sFileName))
End Function



Private Function SetDefaultLogFile()

Dim Buffer As String
Buffer = Space(MAX_PATH)

If GetTempPath(MAX_PATH, Buffer) <> 0 Then
    TextLogfile.Text = Left$(Buffer, InStr(Buffer, vbNullChar) - 1) & "MmsLog.txt"
Else
    TextLogfile.Text = "C:\MmsLog.txt"
End If
End Function
