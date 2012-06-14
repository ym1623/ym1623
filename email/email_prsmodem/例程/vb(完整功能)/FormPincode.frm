VERSION 5.00
Begin VB.Form FormGsmPincode 
   BorderStyle     =   4  'Fixed ToolWindow
   Caption         =   "输入PIN码"
   ClientHeight    =   2115
   ClientLeft      =   45
   ClientTop       =   285
   ClientWidth     =   3750
   LinkTopic       =   "Form1"
   MaxButton       =   0   'False
   MinButton       =   0   'False
   ScaleHeight     =   2115
   ScaleWidth      =   3750
   ShowInTaskbar   =   0   'False
   StartUpPosition =   1  '所有者中心
   Begin VB.Frame Frame1 
      Caption         =   "Pin码"
      Height          =   1575
      Left            =   0
      TabIndex        =   2
      Top             =   0
      Width           =   3735
      Begin VB.TextBox textPin 
         Height          =   345
         IMEMode         =   3  'DISABLE
         Left            =   900
         PasswordChar    =   "*"
         TabIndex        =   0
         Top             =   420
         Width           =   2325
      End
      Begin VB.Label Label1 
         Caption         =   "Pin码:"
         Height          =   185
         Left            =   240
         TabIndex        =   5
         Top             =   480
         Width           =   615
      End
      Begin VB.Label Label2 
         Caption         =   "如果SIM卡需要验证"
         Height          =   255
         Left            =   240
         TabIndex        =   4
         Top             =   1080
         Width           =   3375
      End
   End
   Begin VB.CommandButton cmdCancel 
      Cancel          =   -1  'True
      Caption         =   "取消"
      Height          =   390
      Left            =   2520
      TabIndex        =   3
      Top             =   1680
      Width           =   1140
   End
   Begin VB.CommandButton cmdOK 
      Caption         =   "确定"
      Default         =   -1  'True
      Height          =   390
      Left            =   1320
      TabIndex        =   1
      Top             =   1680
      Width           =   1140
   End
End
Attribute VB_Name = "FormGsmPincode"
Attribute VB_GlobalNameSpace = False
Attribute VB_Creatable = False
Attribute VB_PredeclaredId = True
Attribute VB_Exposed = False
Option Explicit

Public EnterPin As Boolean

Private Sub cmdCancel_Click()
    EnterPin = False
    Me.Hide
End Sub

Private Sub cmdOK_Click()
    EnterPin = True
    Me.Hide
End Sub

