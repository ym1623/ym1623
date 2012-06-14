VERSION 5.00
Begin VB.Form FormDemo 
   BorderStyle     =   3  'Fixed Dialog
   Caption         =   "彩信控件Demo-vb版"
   ClientHeight    =   2610
   ClientLeft      =   6015
   ClientTop       =   3150
   ClientWidth     =   2910
   LinkTopic       =   "Form1"
   MaxButton       =   0   'False
   ScaleHeight     =   2610
   ScaleWidth      =   2910
   ShowInTaskbar   =   0   'False
   StartUpPosition =   2  '屏幕中心
   Begin VB.Frame Frame4 
      Height          =   855
      Left            =   120
      TabIndex        =   2
      Top             =   1320
      Width           =   2535
      Begin VB.CommandButton CommandMm1 
         Caption         =   "彩信"
         Height          =   315
         Left            =   180
         TabIndex        =   3
         Top             =   300
         Width           =   1635
      End
   End
   Begin VB.Frame Frame1 
      Height          =   855
      Left            =   120
      TabIndex        =   1
      Top             =   120
      Width           =   2475
      Begin VB.CommandButton CommandGsm 
         Caption         =   "短信"
         Height          =   315
         Left            =   180
         TabIndex        =   0
         Top             =   300
         Width           =   1635
      End
   End
End
Attribute VB_Name = "FormDemo"
Attribute VB_GlobalNameSpace = False
Attribute VB_Creatable = False
Attribute VB_PredeclaredId = True
Attribute VB_Exposed = False
Private Sub CommandGsm_Click()
    FormGsm.Show
End Sub



Private Sub CommandMm1_Click()
    FormMm1.Show
End Sub



Private Sub Form_Unload(Cancel As Integer)
End
End Sub
