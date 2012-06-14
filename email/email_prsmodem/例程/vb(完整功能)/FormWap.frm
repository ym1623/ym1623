VERSION 5.00
Begin VB.Form FormWap 
   BorderStyle     =   4  'Fixed ToolWindow
   Caption         =   "WAP Push 或 书签推送"
   ClientHeight    =   1860
   ClientLeft      =   45
   ClientTop       =   285
   ClientWidth     =   7305
   LinkTopic       =   "Form1"
   MaxButton       =   0   'False
   MinButton       =   0   'False
   ScaleHeight     =   1860
   ScaleWidth      =   7305
   ShowInTaskbar   =   0   'False
   StartUpPosition =   3  '窗口缺省
   Begin VB.CommandButton CommandCancel 
      Caption         =   "取消"
      Height          =   315
      Left            =   5760
      TabIndex        =   7
      Top             =   1440
      Width           =   1335
   End
   Begin VB.CommandButton CommandOK 
      Caption         =   "确定"
      Height          =   315
      Left            =   4320
      TabIndex        =   6
      Top             =   1440
      Width           =   1335
   End
   Begin VB.TextBox TextTitle 
      Height          =   285
      Left            =   1200
      TabIndex        =   5
      Text            =   "Only English Not Chinese"
      Top             =   960
      Width           =   5895
   End
   Begin VB.TextBox TextURL 
      Height          =   285
      Left            =   1200
      TabIndex        =   4
      Text            =   "http://www.baidu.com"
      Top             =   600
      Width           =   5895
   End
   Begin VB.ComboBox ComboType 
      Height          =   315
      Left            =   1200
      TabIndex        =   3
      Text            =   "ComboType"
      Top             =   240
      Width           =   2655
   End
   Begin VB.Line Line2 
      X1              =   120
      X2              =   7080
      Y1              =   1320
      Y2              =   1320
   End
   Begin VB.Label Label3 
      Caption         =   "标题:"
      Height          =   255
      Left            =   120
      TabIndex        =   2
      Top             =   960
      Width           =   1815
   End
   Begin VB.Label Label2 
      Caption         =   "URL:"
      Height          =   255
      Left            =   120
      TabIndex        =   1
      Top             =   600
      Width           =   1335
   End
   Begin VB.Label Label1 
      Caption         =   "类型:"
      Height          =   255
      Left            =   120
      TabIndex        =   0
      Top             =   240
      Width           =   1335
   End
   Begin VB.Line Line1 
      X1              =   120
      X2              =   7080
      Y1              =   120
      Y2              =   120
   End
End
Attribute VB_Name = "FormWap"
Attribute VB_GlobalNameSpace = False
Attribute VB_Creatable = False
Attribute VB_PredeclaredId = True
Attribute VB_Exposed = False
Public objConstants As xssmsmms.SmsConstants
Public objWapPush As xssmsmms.SmsDataWapPush
Public objWapBookmark As xssmsmms.SmsDataWapBookmark
Public strMessage As String
Public Result As Boolean

Private Sub CommandCancel_Click()
    Me.Hide
End Sub

Private Sub CommandOK_Click()
    If (ComboType.ListIndex = 0) Then
        objWapPush.Description = TextTitle.Text
        objWapPush.URL = TextURL.Text
        objWapPush.Encode
        
        If (objWapPush.LastError = 0) Then
            strMessage = objWapPush.EncodedMessage
            Result = True
        End If
    End If
    
    If (ComboType.ListIndex = 1) Then
        objWapBookmark.Description = TextTitle.Text
        objWapBookmark.URL = TextURL.Text
        objWapBookmark.Encode
        
        If (objWapBookmark.LastError = 0) Then
            strMessage = objWapBookmark.EncodedMessage
            Result = True
        End If
    End If
    
    Me.Hide
End Sub

Private Sub Form_Load()
    Set objWapPush = CreateObject("XunsaiSMSMMS.SmsDataWapPush")
    Set objWapBookmark = CreateObject("XunsaiSMSMMS.SmsDataWapBookmark")
    Set objConstants = CreateObject("XunsaiSMSMMS.SmsConstants")
    
    ComboType.AddItem ("WAP Push")
    ComboType.AddItem ("书签推送")
    ComboType.ListIndex = 0
    
    Result = False
End Sub
    
