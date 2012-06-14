/* this ALWAYS GENERATED file contains the definitions for the interfaces */


/* File created by MIDL compiler version 5.01.0164 */
/* at Tue Apr 01 21:05:27 2008
 */
/* Compiler settings for G:\xssmsmms.idl:
    Oicf (OptLev=i2), W1, Zp8, env=Win32, ms_ext, c_ext
    error checks: allocation ref bounds_check enum stub_data 
*/
//@@MIDL_FILE_HEADING(  )


/* verify that the <rpcndr.h> version is high enough to compile this file*/
#ifndef __REQUIRED_RPCNDR_H_VERSION__
#define __REQUIRED_RPCNDR_H_VERSION__ 440
#endif

#include "rpc.h"
#include "rpcndr.h"

#ifndef __RPCNDR_H_VERSION__
#error this stub requires an updated version of <rpcndr.h>
#endif // __RPCNDR_H_VERSION__

#ifndef COM_NO_WINDOWS_H
#include "windows.h"
#include "ole2.h"
#endif /*COM_NO_WINDOWS_H*/

#ifndef __xssmsmms_h__
#define __xssmsmms_h__

#ifdef __cplusplus
extern "C"{
#endif 

/* Forward Declarations */ 

#ifndef __ISmsProtocolGsm_FWD_DEFINED__
#define __ISmsProtocolGsm_FWD_DEFINED__
typedef interface ISmsProtocolGsm ISmsProtocolGsm;
#endif 	/* __ISmsProtocolGsm_FWD_DEFINED__ */


#ifndef __ISmsMessage_FWD_DEFINED__
#define __ISmsMessage_FWD_DEFINED__
typedef interface ISmsMessage ISmsMessage;
#endif 	/* __ISmsMessage_FWD_DEFINED__ */


#ifndef __ISmsProtocolSmpp_FWD_DEFINED__
#define __ISmsProtocolSmpp_FWD_DEFINED__
typedef interface ISmsProtocolSmpp ISmsProtocolSmpp;
#endif 	/* __ISmsProtocolSmpp_FWD_DEFINED__ */


#ifndef __ISmsConstants_FWD_DEFINED__
#define __ISmsConstants_FWD_DEFINED__
typedef interface ISmsConstants ISmsConstants;
#endif 	/* __ISmsConstants_FWD_DEFINED__ */


#ifndef __ISmsProtocolHttp_FWD_DEFINED__
#define __ISmsProtocolHttp_FWD_DEFINED__
typedef interface ISmsProtocolHttp ISmsProtocolHttp;
#endif 	/* __ISmsProtocolHttp_FWD_DEFINED__ */


#ifndef __ISmsProtocolDialup_FWD_DEFINED__
#define __ISmsProtocolDialup_FWD_DEFINED__
typedef interface ISmsProtocolDialup ISmsProtocolDialup;
#endif 	/* __ISmsProtocolDialup_FWD_DEFINED__ */


#ifndef __IPagerProtocolSnpp_FWD_DEFINED__
#define __IPagerProtocolSnpp_FWD_DEFINED__
typedef interface IPagerProtocolSnpp IPagerProtocolSnpp;
#endif 	/* __IPagerProtocolSnpp_FWD_DEFINED__ */


#ifndef __ISmsDataRingtone_FWD_DEFINED__
#define __ISmsDataRingtone_FWD_DEFINED__
typedef interface ISmsDataRingtone ISmsDataRingtone;
#endif 	/* __ISmsDataRingtone_FWD_DEFINED__ */


#ifndef __ISmsDataPicture_FWD_DEFINED__
#define __ISmsDataPicture_FWD_DEFINED__
typedef interface ISmsDataPicture ISmsDataPicture;
#endif 	/* __ISmsDataPicture_FWD_DEFINED__ */


#ifndef __ISmsDataWapBookmark_FWD_DEFINED__
#define __ISmsDataWapBookmark_FWD_DEFINED__
typedef interface ISmsDataWapBookmark ISmsDataWapBookmark;
#endif 	/* __ISmsDataWapBookmark_FWD_DEFINED__ */


#ifndef __ISmsDataWapPush_FWD_DEFINED__
#define __ISmsDataWapPush_FWD_DEFINED__
typedef interface ISmsDataWapPush ISmsDataWapPush;
#endif 	/* __ISmsDataWapPush_FWD_DEFINED__ */


#ifndef __ISmsDeliveryStatus_FWD_DEFINED__
#define __ISmsDeliveryStatus_FWD_DEFINED__
typedef interface ISmsDeliveryStatus ISmsDeliveryStatus;
#endif 	/* __ISmsDeliveryStatus_FWD_DEFINED__ */


#ifndef __IPagerMessage_FWD_DEFINED__
#define __IPagerMessage_FWD_DEFINED__
typedef interface IPagerMessage IPagerMessage;
#endif 	/* __IPagerMessage_FWD_DEFINED__ */


#ifndef __IMmsProtocolMm1_FWD_DEFINED__
#define __IMmsProtocolMm1_FWD_DEFINED__
typedef interface IMmsProtocolMm1 IMmsProtocolMm1;
#endif 	/* __IMmsProtocolMm1_FWD_DEFINED__ */


#ifndef __IMmsSlide_FWD_DEFINED__
#define __IMmsSlide_FWD_DEFINED__
typedef interface IMmsSlide IMmsSlide;
#endif 	/* __IMmsSlide_FWD_DEFINED__ */


#ifndef __IMmsConstants_FWD_DEFINED__
#define __IMmsConstants_FWD_DEFINED__
typedef interface IMmsConstants IMmsConstants;
#endif 	/* __IMmsConstants_FWD_DEFINED__ */


#ifndef __IMmsPermission_FWD_DEFINED__
#define __IMmsPermission_FWD_DEFINED__
typedef interface IMmsPermission IMmsPermission;
#endif 	/* __IMmsPermission_FWD_DEFINED__ */


#ifndef __IMmsProtocolMm4_FWD_DEFINED__
#define __IMmsProtocolMm4_FWD_DEFINED__
typedef interface IMmsProtocolMm4 IMmsProtocolMm4;
#endif 	/* __IMmsProtocolMm4_FWD_DEFINED__ */


#ifndef __IMmsProtocolMm7_FWD_DEFINED__
#define __IMmsProtocolMm7_FWD_DEFINED__
typedef interface IMmsProtocolMm7 IMmsProtocolMm7;
#endif 	/* __IMmsProtocolMm7_FWD_DEFINED__ */


#ifndef __IMmsMessage_FWD_DEFINED__
#define __IMmsMessage_FWD_DEFINED__
typedef interface IMmsMessage IMmsMessage;
#endif 	/* __IMmsMessage_FWD_DEFINED__ */


#ifndef __ISmsDataMmsNotification_FWD_DEFINED__
#define __ISmsDataMmsNotification_FWD_DEFINED__
typedef interface ISmsDataMmsNotification ISmsDataMmsNotification;
#endif 	/* __ISmsDataMmsNotification_FWD_DEFINED__ */


#ifndef __ISmsDatavCard_FWD_DEFINED__
#define __ISmsDatavCard_FWD_DEFINED__
typedef interface ISmsDatavCard ISmsDatavCard;
#endif 	/* __ISmsDatavCard_FWD_DEFINED__ */


#ifndef __SmsProtocolGsm_FWD_DEFINED__
#define __SmsProtocolGsm_FWD_DEFINED__

#ifdef __cplusplus
typedef class SmsProtocolGsm SmsProtocolGsm;
#else
typedef struct SmsProtocolGsm SmsProtocolGsm;
#endif /* __cplusplus */

#endif 	/* __SmsProtocolGsm_FWD_DEFINED__ */


#ifndef __SmsMessage_FWD_DEFINED__
#define __SmsMessage_FWD_DEFINED__

#ifdef __cplusplus
typedef class SmsMessage SmsMessage;
#else
typedef struct SmsMessage SmsMessage;
#endif /* __cplusplus */

#endif 	/* __SmsMessage_FWD_DEFINED__ */


#ifndef __SmsProtocolSmpp_FWD_DEFINED__
#define __SmsProtocolSmpp_FWD_DEFINED__

#ifdef __cplusplus
typedef class SmsProtocolSmpp SmsProtocolSmpp;
#else
typedef struct SmsProtocolSmpp SmsProtocolSmpp;
#endif /* __cplusplus */

#endif 	/* __SmsProtocolSmpp_FWD_DEFINED__ */


#ifndef __SmsConstants_FWD_DEFINED__
#define __SmsConstants_FWD_DEFINED__

#ifdef __cplusplus
typedef class SmsConstants SmsConstants;
#else
typedef struct SmsConstants SmsConstants;
#endif /* __cplusplus */

#endif 	/* __SmsConstants_FWD_DEFINED__ */


#ifndef __SmsProtocolHttp_FWD_DEFINED__
#define __SmsProtocolHttp_FWD_DEFINED__

#ifdef __cplusplus
typedef class SmsProtocolHttp SmsProtocolHttp;
#else
typedef struct SmsProtocolHttp SmsProtocolHttp;
#endif /* __cplusplus */

#endif 	/* __SmsProtocolHttp_FWD_DEFINED__ */


#ifndef __SmsProtocolDialup_FWD_DEFINED__
#define __SmsProtocolDialup_FWD_DEFINED__

#ifdef __cplusplus
typedef class SmsProtocolDialup SmsProtocolDialup;
#else
typedef struct SmsProtocolDialup SmsProtocolDialup;
#endif /* __cplusplus */

#endif 	/* __SmsProtocolDialup_FWD_DEFINED__ */


#ifndef __PagerProtocolSnpp_FWD_DEFINED__
#define __PagerProtocolSnpp_FWD_DEFINED__

#ifdef __cplusplus
typedef class PagerProtocolSnpp PagerProtocolSnpp;
#else
typedef struct PagerProtocolSnpp PagerProtocolSnpp;
#endif /* __cplusplus */

#endif 	/* __PagerProtocolSnpp_FWD_DEFINED__ */


#ifndef __SmsDataRingtone_FWD_DEFINED__
#define __SmsDataRingtone_FWD_DEFINED__

#ifdef __cplusplus
typedef class SmsDataRingtone SmsDataRingtone;
#else
typedef struct SmsDataRingtone SmsDataRingtone;
#endif /* __cplusplus */

#endif 	/* __SmsDataRingtone_FWD_DEFINED__ */


#ifndef __SmsDataPicture_FWD_DEFINED__
#define __SmsDataPicture_FWD_DEFINED__

#ifdef __cplusplus
typedef class SmsDataPicture SmsDataPicture;
#else
typedef struct SmsDataPicture SmsDataPicture;
#endif /* __cplusplus */

#endif 	/* __SmsDataPicture_FWD_DEFINED__ */


#ifndef __SmsDataWapBookmark_FWD_DEFINED__
#define __SmsDataWapBookmark_FWD_DEFINED__

#ifdef __cplusplus
typedef class SmsDataWapBookmark SmsDataWapBookmark;
#else
typedef struct SmsDataWapBookmark SmsDataWapBookmark;
#endif /* __cplusplus */

#endif 	/* __SmsDataWapBookmark_FWD_DEFINED__ */


#ifndef __SmsDataWapPush_FWD_DEFINED__
#define __SmsDataWapPush_FWD_DEFINED__

#ifdef __cplusplus
typedef class SmsDataWapPush SmsDataWapPush;
#else
typedef struct SmsDataWapPush SmsDataWapPush;
#endif /* __cplusplus */

#endif 	/* __SmsDataWapPush_FWD_DEFINED__ */


#ifndef __SmsDeliveryStatus_FWD_DEFINED__
#define __SmsDeliveryStatus_FWD_DEFINED__

#ifdef __cplusplus
typedef class SmsDeliveryStatus SmsDeliveryStatus;
#else
typedef struct SmsDeliveryStatus SmsDeliveryStatus;
#endif /* __cplusplus */

#endif 	/* __SmsDeliveryStatus_FWD_DEFINED__ */


#ifndef __PagerMessage_FWD_DEFINED__
#define __PagerMessage_FWD_DEFINED__

#ifdef __cplusplus
typedef class PagerMessage PagerMessage;
#else
typedef struct PagerMessage PagerMessage;
#endif /* __cplusplus */

#endif 	/* __PagerMessage_FWD_DEFINED__ */


#ifndef __MmsProtocolMm1_FWD_DEFINED__
#define __MmsProtocolMm1_FWD_DEFINED__

#ifdef __cplusplus
typedef class MmsProtocolMm1 MmsProtocolMm1;
#else
typedef struct MmsProtocolMm1 MmsProtocolMm1;
#endif /* __cplusplus */

#endif 	/* __MmsProtocolMm1_FWD_DEFINED__ */


#ifndef __MmsSlide_FWD_DEFINED__
#define __MmsSlide_FWD_DEFINED__

#ifdef __cplusplus
typedef class MmsSlide MmsSlide;
#else
typedef struct MmsSlide MmsSlide;
#endif /* __cplusplus */

#endif 	/* __MmsSlide_FWD_DEFINED__ */


#ifndef __MmsConstants_FWD_DEFINED__
#define __MmsConstants_FWD_DEFINED__

#ifdef __cplusplus
typedef class MmsConstants MmsConstants;
#else
typedef struct MmsConstants MmsConstants;
#endif /* __cplusplus */

#endif 	/* __MmsConstants_FWD_DEFINED__ */


#ifndef __MmsPermission_FWD_DEFINED__
#define __MmsPermission_FWD_DEFINED__

#ifdef __cplusplus
typedef class MmsPermission MmsPermission;
#else
typedef struct MmsPermission MmsPermission;
#endif /* __cplusplus */

#endif 	/* __MmsPermission_FWD_DEFINED__ */


#ifndef __MmsProtocolMm4_FWD_DEFINED__
#define __MmsProtocolMm4_FWD_DEFINED__

#ifdef __cplusplus
typedef class MmsProtocolMm4 MmsProtocolMm4;
#else
typedef struct MmsProtocolMm4 MmsProtocolMm4;
#endif /* __cplusplus */

#endif 	/* __MmsProtocolMm4_FWD_DEFINED__ */


#ifndef __MmsProtocolMm7_FWD_DEFINED__
#define __MmsProtocolMm7_FWD_DEFINED__

#ifdef __cplusplus
typedef class MmsProtocolMm7 MmsProtocolMm7;
#else
typedef struct MmsProtocolMm7 MmsProtocolMm7;
#endif /* __cplusplus */

#endif 	/* __MmsProtocolMm7_FWD_DEFINED__ */


#ifndef __MmsMessage_FWD_DEFINED__
#define __MmsMessage_FWD_DEFINED__

#ifdef __cplusplus
typedef class MmsMessage MmsMessage;
#else
typedef struct MmsMessage MmsMessage;
#endif /* __cplusplus */

#endif 	/* __MmsMessage_FWD_DEFINED__ */


#ifndef __SmsDataMmsNotification_FWD_DEFINED__
#define __SmsDataMmsNotification_FWD_DEFINED__

#ifdef __cplusplus
typedef class SmsDataMmsNotification SmsDataMmsNotification;
#else
typedef struct SmsDataMmsNotification SmsDataMmsNotification;
#endif /* __cplusplus */

#endif 	/* __SmsDataMmsNotification_FWD_DEFINED__ */


#ifndef __SmsDatavCard_FWD_DEFINED__
#define __SmsDatavCard_FWD_DEFINED__

#ifdef __cplusplus
typedef class SmsDatavCard SmsDatavCard;
#else
typedef struct SmsDatavCard SmsDatavCard;
#endif /* __cplusplus */

#endif 	/* __SmsDatavCard_FWD_DEFINED__ */


/* header files for imported files */
#include "oaidl.h"
#include "ocidl.h"

void __RPC_FAR * __RPC_USER MIDL_user_allocate(size_t);
void __RPC_USER MIDL_user_free( void __RPC_FAR * ); 

#ifndef __ISmsProtocolGsm_INTERFACE_DEFINED__
#define __ISmsProtocolGsm_INTERFACE_DEFINED__

/* interface ISmsProtocolGsm */
/* [unique][helpstring][dual][uuid][object] */ 


EXTERN_C const IID IID_ISmsProtocolGsm;

#if defined(__cplusplus) && !defined(CINTERFACE)
    
    MIDL_INTERFACE("3DEF0FEB-7F19-4BDD-A2D5-60A1E6E9A473")
    ISmsProtocolGsm : public IDispatch
    {
    public:
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_LastError( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Version( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Build( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ExpirationDate( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_Reserved( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_LogFile( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_LogFile( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ActivityFile( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_ActivityFile( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_DistributionID( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_DistributionKey( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE Clear( void) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE GetErrorDescription( 
            LONG newVal,
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE Activate( 
            BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Device( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_Device( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_DeviceSpeed( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_DeviceSpeed( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_DeviceInitString( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_DeviceInitString( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_DeviceFlowControl( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_DeviceFlowControl( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_MessageStorage( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_MessageStorage( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ReportsStorage( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_ReportsStorage( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_DeleteAfterReceive( 
            /* [retval][out] */ BOOL __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_DeleteAfterReceive( 
            /* [in] */ BOOL newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_SMSC( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_SMSC( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_AdvancedSettings( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_AdvancedSettings( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE GetDeviceCount( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE GetDevice( 
            LONG lDevice,
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE EnterPin( 
            BSTR bstrPIN) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE SendCommand( 
            BSTR bstrCommand,
            LONG lTimeout,
            /* [retval][out] */ BSTR __RPC_FAR *pbstrResponse) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE Send( 
            VARIANT __RPC_FAR *pMessage,
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE Receive( void) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE QueryStatus( 
            BSTR bstrReference,
            /* [retval][out] */ VARIANT __RPC_FAR *pVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE GetFirstMessage( 
            /* [retval][out] */ VARIANT __RPC_FAR *pVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE GetNextMessage( 
            /* [retval][out] */ VARIANT __RPC_FAR *pVal) = 0;
        
    };
    
#else 	/* C style interface */

    typedef struct ISmsProtocolGsmVtbl
    {
        BEGIN_INTERFACE
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *QueryInterface )( 
            ISmsProtocolGsm __RPC_FAR * This,
            /* [in] */ REFIID riid,
            /* [iid_is][out] */ void __RPC_FAR *__RPC_FAR *ppvObject);
        
        ULONG ( STDMETHODCALLTYPE __RPC_FAR *AddRef )( 
            ISmsProtocolGsm __RPC_FAR * This);
        
        ULONG ( STDMETHODCALLTYPE __RPC_FAR *Release )( 
            ISmsProtocolGsm __RPC_FAR * This);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetTypeInfoCount )( 
            ISmsProtocolGsm __RPC_FAR * This,
            /* [out] */ UINT __RPC_FAR *pctinfo);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetTypeInfo )( 
            ISmsProtocolGsm __RPC_FAR * This,
            /* [in] */ UINT iTInfo,
            /* [in] */ LCID lcid,
            /* [out] */ ITypeInfo __RPC_FAR *__RPC_FAR *ppTInfo);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetIDsOfNames )( 
            ISmsProtocolGsm __RPC_FAR * This,
            /* [in] */ REFIID riid,
            /* [size_is][in] */ LPOLESTR __RPC_FAR *rgszNames,
            /* [in] */ UINT cNames,
            /* [in] */ LCID lcid,
            /* [size_is][out] */ DISPID __RPC_FAR *rgDispId);
        
        /* [local] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Invoke )( 
            ISmsProtocolGsm __RPC_FAR * This,
            /* [in] */ DISPID dispIdMember,
            /* [in] */ REFIID riid,
            /* [in] */ LCID lcid,
            /* [in] */ WORD wFlags,
            /* [out][in] */ DISPPARAMS __RPC_FAR *pDispParams,
            /* [out] */ VARIANT __RPC_FAR *pVarResult,
            /* [out] */ EXCEPINFO __RPC_FAR *pExcepInfo,
            /* [out] */ UINT __RPC_FAR *puArgErr);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_LastError )( 
            ISmsProtocolGsm __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Version )( 
            ISmsProtocolGsm __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Build )( 
            ISmsProtocolGsm __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ExpirationDate )( 
            ISmsProtocolGsm __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_Reserved )( 
            ISmsProtocolGsm __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_LogFile )( 
            ISmsProtocolGsm __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_LogFile )( 
            ISmsProtocolGsm __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ActivityFile )( 
            ISmsProtocolGsm __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_ActivityFile )( 
            ISmsProtocolGsm __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_DistributionID )( 
            ISmsProtocolGsm __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_DistributionKey )( 
            ISmsProtocolGsm __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Clear )( 
            ISmsProtocolGsm __RPC_FAR * This);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetErrorDescription )( 
            ISmsProtocolGsm __RPC_FAR * This,
            LONG newVal,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Activate )( 
            ISmsProtocolGsm __RPC_FAR * This,
            BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Device )( 
            ISmsProtocolGsm __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_Device )( 
            ISmsProtocolGsm __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_DeviceSpeed )( 
            ISmsProtocolGsm __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_DeviceSpeed )( 
            ISmsProtocolGsm __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_DeviceInitString )( 
            ISmsProtocolGsm __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_DeviceInitString )( 
            ISmsProtocolGsm __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_DeviceFlowControl )( 
            ISmsProtocolGsm __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_DeviceFlowControl )( 
            ISmsProtocolGsm __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_MessageStorage )( 
            ISmsProtocolGsm __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_MessageStorage )( 
            ISmsProtocolGsm __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ReportsStorage )( 
            ISmsProtocolGsm __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_ReportsStorage )( 
            ISmsProtocolGsm __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_DeleteAfterReceive )( 
            ISmsProtocolGsm __RPC_FAR * This,
            /* [retval][out] */ BOOL __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_DeleteAfterReceive )( 
            ISmsProtocolGsm __RPC_FAR * This,
            /* [in] */ BOOL newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_SMSC )( 
            ISmsProtocolGsm __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_SMSC )( 
            ISmsProtocolGsm __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_AdvancedSettings )( 
            ISmsProtocolGsm __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_AdvancedSettings )( 
            ISmsProtocolGsm __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetDeviceCount )( 
            ISmsProtocolGsm __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetDevice )( 
            ISmsProtocolGsm __RPC_FAR * This,
            LONG lDevice,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *EnterPin )( 
            ISmsProtocolGsm __RPC_FAR * This,
            BSTR bstrPIN);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *SendCommand )( 
            ISmsProtocolGsm __RPC_FAR * This,
            BSTR bstrCommand,
            LONG lTimeout,
            /* [retval][out] */ BSTR __RPC_FAR *pbstrResponse);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Send )( 
            ISmsProtocolGsm __RPC_FAR * This,
            VARIANT __RPC_FAR *pMessage,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Receive )( 
            ISmsProtocolGsm __RPC_FAR * This);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *QueryStatus )( 
            ISmsProtocolGsm __RPC_FAR * This,
            BSTR bstrReference,
            /* [retval][out] */ VARIANT __RPC_FAR *pVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetFirstMessage )( 
            ISmsProtocolGsm __RPC_FAR * This,
            /* [retval][out] */ VARIANT __RPC_FAR *pVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetNextMessage )( 
            ISmsProtocolGsm __RPC_FAR * This,
            /* [retval][out] */ VARIANT __RPC_FAR *pVal);
        
        END_INTERFACE
    } ISmsProtocolGsmVtbl;

    interface ISmsProtocolGsm
    {
        CONST_VTBL struct ISmsProtocolGsmVtbl __RPC_FAR *lpVtbl;
    };

    

#ifdef COBJMACROS


#define ISmsProtocolGsm_QueryInterface(This,riid,ppvObject)	\
    (This)->lpVtbl -> QueryInterface(This,riid,ppvObject)

#define ISmsProtocolGsm_AddRef(This)	\
    (This)->lpVtbl -> AddRef(This)

#define ISmsProtocolGsm_Release(This)	\
    (This)->lpVtbl -> Release(This)


#define ISmsProtocolGsm_GetTypeInfoCount(This,pctinfo)	\
    (This)->lpVtbl -> GetTypeInfoCount(This,pctinfo)

#define ISmsProtocolGsm_GetTypeInfo(This,iTInfo,lcid,ppTInfo)	\
    (This)->lpVtbl -> GetTypeInfo(This,iTInfo,lcid,ppTInfo)

#define ISmsProtocolGsm_GetIDsOfNames(This,riid,rgszNames,cNames,lcid,rgDispId)	\
    (This)->lpVtbl -> GetIDsOfNames(This,riid,rgszNames,cNames,lcid,rgDispId)

#define ISmsProtocolGsm_Invoke(This,dispIdMember,riid,lcid,wFlags,pDispParams,pVarResult,pExcepInfo,puArgErr)	\
    (This)->lpVtbl -> Invoke(This,dispIdMember,riid,lcid,wFlags,pDispParams,pVarResult,pExcepInfo,puArgErr)


#define ISmsProtocolGsm_get_LastError(This,pVal)	\
    (This)->lpVtbl -> get_LastError(This,pVal)

#define ISmsProtocolGsm_get_Version(This,pVal)	\
    (This)->lpVtbl -> get_Version(This,pVal)

#define ISmsProtocolGsm_get_Build(This,pVal)	\
    (This)->lpVtbl -> get_Build(This,pVal)

#define ISmsProtocolGsm_get_ExpirationDate(This,pVal)	\
    (This)->lpVtbl -> get_ExpirationDate(This,pVal)

#define ISmsProtocolGsm_put_Reserved(This,newVal)	\
    (This)->lpVtbl -> put_Reserved(This,newVal)

#define ISmsProtocolGsm_get_LogFile(This,pVal)	\
    (This)->lpVtbl -> get_LogFile(This,pVal)

#define ISmsProtocolGsm_put_LogFile(This,newVal)	\
    (This)->lpVtbl -> put_LogFile(This,newVal)

#define ISmsProtocolGsm_get_ActivityFile(This,pVal)	\
    (This)->lpVtbl -> get_ActivityFile(This,pVal)

#define ISmsProtocolGsm_put_ActivityFile(This,newVal)	\
    (This)->lpVtbl -> put_ActivityFile(This,newVal)

#define ISmsProtocolGsm_put_DistributionID(This,newVal)	\
    (This)->lpVtbl -> put_DistributionID(This,newVal)

#define ISmsProtocolGsm_put_DistributionKey(This,newVal)	\
    (This)->lpVtbl -> put_DistributionKey(This,newVal)

#define ISmsProtocolGsm_Clear(This)	\
    (This)->lpVtbl -> Clear(This)

#define ISmsProtocolGsm_GetErrorDescription(This,newVal,pVal)	\
    (This)->lpVtbl -> GetErrorDescription(This,newVal,pVal)

#define ISmsProtocolGsm_Activate(This,newVal)	\
    (This)->lpVtbl -> Activate(This,newVal)

#define ISmsProtocolGsm_get_Device(This,pVal)	\
    (This)->lpVtbl -> get_Device(This,pVal)

#define ISmsProtocolGsm_put_Device(This,newVal)	\
    (This)->lpVtbl -> put_Device(This,newVal)

#define ISmsProtocolGsm_get_DeviceSpeed(This,pVal)	\
    (This)->lpVtbl -> get_DeviceSpeed(This,pVal)

#define ISmsProtocolGsm_put_DeviceSpeed(This,newVal)	\
    (This)->lpVtbl -> put_DeviceSpeed(This,newVal)

#define ISmsProtocolGsm_get_DeviceInitString(This,pVal)	\
    (This)->lpVtbl -> get_DeviceInitString(This,pVal)

#define ISmsProtocolGsm_put_DeviceInitString(This,newVal)	\
    (This)->lpVtbl -> put_DeviceInitString(This,newVal)

#define ISmsProtocolGsm_get_DeviceFlowControl(This,pVal)	\
    (This)->lpVtbl -> get_DeviceFlowControl(This,pVal)

#define ISmsProtocolGsm_put_DeviceFlowControl(This,newVal)	\
    (This)->lpVtbl -> put_DeviceFlowControl(This,newVal)

#define ISmsProtocolGsm_get_MessageStorage(This,pVal)	\
    (This)->lpVtbl -> get_MessageStorage(This,pVal)

#define ISmsProtocolGsm_put_MessageStorage(This,newVal)	\
    (This)->lpVtbl -> put_MessageStorage(This,newVal)

#define ISmsProtocolGsm_get_ReportsStorage(This,pVal)	\
    (This)->lpVtbl -> get_ReportsStorage(This,pVal)

#define ISmsProtocolGsm_put_ReportsStorage(This,newVal)	\
    (This)->lpVtbl -> put_ReportsStorage(This,newVal)

#define ISmsProtocolGsm_get_DeleteAfterReceive(This,pVal)	\
    (This)->lpVtbl -> get_DeleteAfterReceive(This,pVal)

#define ISmsProtocolGsm_put_DeleteAfterReceive(This,newVal)	\
    (This)->lpVtbl -> put_DeleteAfterReceive(This,newVal)

#define ISmsProtocolGsm_get_SMSC(This,pVal)	\
    (This)->lpVtbl -> get_SMSC(This,pVal)

#define ISmsProtocolGsm_put_SMSC(This,newVal)	\
    (This)->lpVtbl -> put_SMSC(This,newVal)

#define ISmsProtocolGsm_get_AdvancedSettings(This,pVal)	\
    (This)->lpVtbl -> get_AdvancedSettings(This,pVal)

#define ISmsProtocolGsm_put_AdvancedSettings(This,newVal)	\
    (This)->lpVtbl -> put_AdvancedSettings(This,newVal)

#define ISmsProtocolGsm_GetDeviceCount(This,pVal)	\
    (This)->lpVtbl -> GetDeviceCount(This,pVal)

#define ISmsProtocolGsm_GetDevice(This,lDevice,pVal)	\
    (This)->lpVtbl -> GetDevice(This,lDevice,pVal)

#define ISmsProtocolGsm_EnterPin(This,bstrPIN)	\
    (This)->lpVtbl -> EnterPin(This,bstrPIN)

#define ISmsProtocolGsm_SendCommand(This,bstrCommand,lTimeout,pbstrResponse)	\
    (This)->lpVtbl -> SendCommand(This,bstrCommand,lTimeout,pbstrResponse)

#define ISmsProtocolGsm_Send(This,pMessage,pVal)	\
    (This)->lpVtbl -> Send(This,pMessage,pVal)

#define ISmsProtocolGsm_Receive(This)	\
    (This)->lpVtbl -> Receive(This)

#define ISmsProtocolGsm_QueryStatus(This,bstrReference,pVal)	\
    (This)->lpVtbl -> QueryStatus(This,bstrReference,pVal)

#define ISmsProtocolGsm_GetFirstMessage(This,pVal)	\
    (This)->lpVtbl -> GetFirstMessage(This,pVal)

#define ISmsProtocolGsm_GetNextMessage(This,pVal)	\
    (This)->lpVtbl -> GetNextMessage(This,pVal)

#endif /* COBJMACROS */


#endif 	/* C style interface */



/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolGsm_get_LastError_Proxy( 
    ISmsProtocolGsm __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolGsm_get_LastError_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolGsm_get_Version_Proxy( 
    ISmsProtocolGsm __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolGsm_get_Version_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolGsm_get_Build_Proxy( 
    ISmsProtocolGsm __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolGsm_get_Build_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolGsm_get_ExpirationDate_Proxy( 
    ISmsProtocolGsm __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolGsm_get_ExpirationDate_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolGsm_put_Reserved_Proxy( 
    ISmsProtocolGsm __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB ISmsProtocolGsm_put_Reserved_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolGsm_get_LogFile_Proxy( 
    ISmsProtocolGsm __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolGsm_get_LogFile_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolGsm_put_LogFile_Proxy( 
    ISmsProtocolGsm __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsProtocolGsm_put_LogFile_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolGsm_get_ActivityFile_Proxy( 
    ISmsProtocolGsm __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolGsm_get_ActivityFile_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolGsm_put_ActivityFile_Proxy( 
    ISmsProtocolGsm __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsProtocolGsm_put_ActivityFile_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolGsm_put_DistributionID_Proxy( 
    ISmsProtocolGsm __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsProtocolGsm_put_DistributionID_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolGsm_put_DistributionKey_Proxy( 
    ISmsProtocolGsm __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsProtocolGsm_put_DistributionKey_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsProtocolGsm_Clear_Proxy( 
    ISmsProtocolGsm __RPC_FAR * This);


void __RPC_STUB ISmsProtocolGsm_Clear_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsProtocolGsm_GetErrorDescription_Proxy( 
    ISmsProtocolGsm __RPC_FAR * This,
    LONG newVal,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolGsm_GetErrorDescription_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsProtocolGsm_Activate_Proxy( 
    ISmsProtocolGsm __RPC_FAR * This,
    BSTR newVal);


void __RPC_STUB ISmsProtocolGsm_Activate_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolGsm_get_Device_Proxy( 
    ISmsProtocolGsm __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolGsm_get_Device_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolGsm_put_Device_Proxy( 
    ISmsProtocolGsm __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsProtocolGsm_put_Device_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolGsm_get_DeviceSpeed_Proxy( 
    ISmsProtocolGsm __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolGsm_get_DeviceSpeed_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolGsm_put_DeviceSpeed_Proxy( 
    ISmsProtocolGsm __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB ISmsProtocolGsm_put_DeviceSpeed_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolGsm_get_DeviceInitString_Proxy( 
    ISmsProtocolGsm __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolGsm_get_DeviceInitString_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolGsm_put_DeviceInitString_Proxy( 
    ISmsProtocolGsm __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsProtocolGsm_put_DeviceInitString_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolGsm_get_DeviceFlowControl_Proxy( 
    ISmsProtocolGsm __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolGsm_get_DeviceFlowControl_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolGsm_put_DeviceFlowControl_Proxy( 
    ISmsProtocolGsm __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB ISmsProtocolGsm_put_DeviceFlowControl_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolGsm_get_MessageStorage_Proxy( 
    ISmsProtocolGsm __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolGsm_get_MessageStorage_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolGsm_put_MessageStorage_Proxy( 
    ISmsProtocolGsm __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB ISmsProtocolGsm_put_MessageStorage_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolGsm_get_ReportsStorage_Proxy( 
    ISmsProtocolGsm __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolGsm_get_ReportsStorage_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolGsm_put_ReportsStorage_Proxy( 
    ISmsProtocolGsm __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB ISmsProtocolGsm_put_ReportsStorage_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolGsm_get_DeleteAfterReceive_Proxy( 
    ISmsProtocolGsm __RPC_FAR * This,
    /* [retval][out] */ BOOL __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolGsm_get_DeleteAfterReceive_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolGsm_put_DeleteAfterReceive_Proxy( 
    ISmsProtocolGsm __RPC_FAR * This,
    /* [in] */ BOOL newVal);


void __RPC_STUB ISmsProtocolGsm_put_DeleteAfterReceive_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolGsm_get_SMSC_Proxy( 
    ISmsProtocolGsm __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolGsm_get_SMSC_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolGsm_put_SMSC_Proxy( 
    ISmsProtocolGsm __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsProtocolGsm_put_SMSC_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolGsm_get_AdvancedSettings_Proxy( 
    ISmsProtocolGsm __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolGsm_get_AdvancedSettings_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolGsm_put_AdvancedSettings_Proxy( 
    ISmsProtocolGsm __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsProtocolGsm_put_AdvancedSettings_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsProtocolGsm_GetDeviceCount_Proxy( 
    ISmsProtocolGsm __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolGsm_GetDeviceCount_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsProtocolGsm_GetDevice_Proxy( 
    ISmsProtocolGsm __RPC_FAR * This,
    LONG lDevice,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolGsm_GetDevice_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsProtocolGsm_EnterPin_Proxy( 
    ISmsProtocolGsm __RPC_FAR * This,
    BSTR bstrPIN);


void __RPC_STUB ISmsProtocolGsm_EnterPin_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsProtocolGsm_SendCommand_Proxy( 
    ISmsProtocolGsm __RPC_FAR * This,
    BSTR bstrCommand,
    LONG lTimeout,
    /* [retval][out] */ BSTR __RPC_FAR *pbstrResponse);


void __RPC_STUB ISmsProtocolGsm_SendCommand_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsProtocolGsm_Send_Proxy( 
    ISmsProtocolGsm __RPC_FAR * This,
    VARIANT __RPC_FAR *pMessage,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolGsm_Send_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsProtocolGsm_Receive_Proxy( 
    ISmsProtocolGsm __RPC_FAR * This);


void __RPC_STUB ISmsProtocolGsm_Receive_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsProtocolGsm_QueryStatus_Proxy( 
    ISmsProtocolGsm __RPC_FAR * This,
    BSTR bstrReference,
    /* [retval][out] */ VARIANT __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolGsm_QueryStatus_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsProtocolGsm_GetFirstMessage_Proxy( 
    ISmsProtocolGsm __RPC_FAR * This,
    /* [retval][out] */ VARIANT __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolGsm_GetFirstMessage_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsProtocolGsm_GetNextMessage_Proxy( 
    ISmsProtocolGsm __RPC_FAR * This,
    /* [retval][out] */ VARIANT __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolGsm_GetNextMessage_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);



#endif 	/* __ISmsProtocolGsm_INTERFACE_DEFINED__ */


#ifndef __ISmsMessage_INTERFACE_DEFINED__
#define __ISmsMessage_INTERFACE_DEFINED__

/* interface ISmsMessage */
/* [unique][helpstring][dual][uuid][object] */ 


EXTERN_C const IID IID_ISmsMessage;

#if defined(__cplusplus) && !defined(CINTERFACE)
    
    MIDL_INTERFACE("74A9B740-4199-41D8-AF10-5D9ECB68980C")
    ISmsMessage : public IDispatch
    {
    public:
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE Clear( void) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Sender( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_Sender( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Recipient( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_Recipient( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Data( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_Data( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Format( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_Format( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ValidityPeriod( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_ValidityPeriod( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_SMSC( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_SMSC( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Time( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_Time( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_TimeSecs( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_TimeSecs( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_PID( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_PID( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_DCS( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_DCS( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ESM( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_ESM( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_SourceTON( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_SourceTON( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_SourceNPI( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_SourceNPI( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_DestinationTON( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_DestinationTON( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_DestinationNPI( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_DestinationNPI( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ServiceType( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_ServiceType( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_RequestDeliveryStatus( 
            /* [retval][out] */ BOOL __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_RequestDeliveryStatus( 
            /* [in] */ BOOL newVal) = 0;
        
    };
    
#else 	/* C style interface */

    typedef struct ISmsMessageVtbl
    {
        BEGIN_INTERFACE
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *QueryInterface )( 
            ISmsMessage __RPC_FAR * This,
            /* [in] */ REFIID riid,
            /* [iid_is][out] */ void __RPC_FAR *__RPC_FAR *ppvObject);
        
        ULONG ( STDMETHODCALLTYPE __RPC_FAR *AddRef )( 
            ISmsMessage __RPC_FAR * This);
        
        ULONG ( STDMETHODCALLTYPE __RPC_FAR *Release )( 
            ISmsMessage __RPC_FAR * This);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetTypeInfoCount )( 
            ISmsMessage __RPC_FAR * This,
            /* [out] */ UINT __RPC_FAR *pctinfo);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetTypeInfo )( 
            ISmsMessage __RPC_FAR * This,
            /* [in] */ UINT iTInfo,
            /* [in] */ LCID lcid,
            /* [out] */ ITypeInfo __RPC_FAR *__RPC_FAR *ppTInfo);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetIDsOfNames )( 
            ISmsMessage __RPC_FAR * This,
            /* [in] */ REFIID riid,
            /* [size_is][in] */ LPOLESTR __RPC_FAR *rgszNames,
            /* [in] */ UINT cNames,
            /* [in] */ LCID lcid,
            /* [size_is][out] */ DISPID __RPC_FAR *rgDispId);
        
        /* [local] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Invoke )( 
            ISmsMessage __RPC_FAR * This,
            /* [in] */ DISPID dispIdMember,
            /* [in] */ REFIID riid,
            /* [in] */ LCID lcid,
            /* [in] */ WORD wFlags,
            /* [out][in] */ DISPPARAMS __RPC_FAR *pDispParams,
            /* [out] */ VARIANT __RPC_FAR *pVarResult,
            /* [out] */ EXCEPINFO __RPC_FAR *pExcepInfo,
            /* [out] */ UINT __RPC_FAR *puArgErr);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Clear )( 
            ISmsMessage __RPC_FAR * This);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Sender )( 
            ISmsMessage __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_Sender )( 
            ISmsMessage __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Recipient )( 
            ISmsMessage __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_Recipient )( 
            ISmsMessage __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Data )( 
            ISmsMessage __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_Data )( 
            ISmsMessage __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Format )( 
            ISmsMessage __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_Format )( 
            ISmsMessage __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ValidityPeriod )( 
            ISmsMessage __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_ValidityPeriod )( 
            ISmsMessage __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_SMSC )( 
            ISmsMessage __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_SMSC )( 
            ISmsMessage __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Time )( 
            ISmsMessage __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_Time )( 
            ISmsMessage __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_TimeSecs )( 
            ISmsMessage __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_TimeSecs )( 
            ISmsMessage __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_PID )( 
            ISmsMessage __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_PID )( 
            ISmsMessage __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_DCS )( 
            ISmsMessage __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_DCS )( 
            ISmsMessage __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ESM )( 
            ISmsMessage __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_ESM )( 
            ISmsMessage __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_SourceTON )( 
            ISmsMessage __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_SourceTON )( 
            ISmsMessage __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_SourceNPI )( 
            ISmsMessage __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_SourceNPI )( 
            ISmsMessage __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_DestinationTON )( 
            ISmsMessage __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_DestinationTON )( 
            ISmsMessage __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_DestinationNPI )( 
            ISmsMessage __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_DestinationNPI )( 
            ISmsMessage __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ServiceType )( 
            ISmsMessage __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_ServiceType )( 
            ISmsMessage __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_RequestDeliveryStatus )( 
            ISmsMessage __RPC_FAR * This,
            /* [retval][out] */ BOOL __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_RequestDeliveryStatus )( 
            ISmsMessage __RPC_FAR * This,
            /* [in] */ BOOL newVal);
        
        END_INTERFACE
    } ISmsMessageVtbl;

    interface ISmsMessage
    {
        CONST_VTBL struct ISmsMessageVtbl __RPC_FAR *lpVtbl;
    };

    

#ifdef COBJMACROS


#define ISmsMessage_QueryInterface(This,riid,ppvObject)	\
    (This)->lpVtbl -> QueryInterface(This,riid,ppvObject)

#define ISmsMessage_AddRef(This)	\
    (This)->lpVtbl -> AddRef(This)

#define ISmsMessage_Release(This)	\
    (This)->lpVtbl -> Release(This)


#define ISmsMessage_GetTypeInfoCount(This,pctinfo)	\
    (This)->lpVtbl -> GetTypeInfoCount(This,pctinfo)

#define ISmsMessage_GetTypeInfo(This,iTInfo,lcid,ppTInfo)	\
    (This)->lpVtbl -> GetTypeInfo(This,iTInfo,lcid,ppTInfo)

#define ISmsMessage_GetIDsOfNames(This,riid,rgszNames,cNames,lcid,rgDispId)	\
    (This)->lpVtbl -> GetIDsOfNames(This,riid,rgszNames,cNames,lcid,rgDispId)

#define ISmsMessage_Invoke(This,dispIdMember,riid,lcid,wFlags,pDispParams,pVarResult,pExcepInfo,puArgErr)	\
    (This)->lpVtbl -> Invoke(This,dispIdMember,riid,lcid,wFlags,pDispParams,pVarResult,pExcepInfo,puArgErr)


#define ISmsMessage_Clear(This)	\
    (This)->lpVtbl -> Clear(This)

#define ISmsMessage_get_Sender(This,pVal)	\
    (This)->lpVtbl -> get_Sender(This,pVal)

#define ISmsMessage_put_Sender(This,newVal)	\
    (This)->lpVtbl -> put_Sender(This,newVal)

#define ISmsMessage_get_Recipient(This,pVal)	\
    (This)->lpVtbl -> get_Recipient(This,pVal)

#define ISmsMessage_put_Recipient(This,newVal)	\
    (This)->lpVtbl -> put_Recipient(This,newVal)

#define ISmsMessage_get_Data(This,pVal)	\
    (This)->lpVtbl -> get_Data(This,pVal)

#define ISmsMessage_put_Data(This,newVal)	\
    (This)->lpVtbl -> put_Data(This,newVal)

#define ISmsMessage_get_Format(This,pVal)	\
    (This)->lpVtbl -> get_Format(This,pVal)

#define ISmsMessage_put_Format(This,newVal)	\
    (This)->lpVtbl -> put_Format(This,newVal)

#define ISmsMessage_get_ValidityPeriod(This,pVal)	\
    (This)->lpVtbl -> get_ValidityPeriod(This,pVal)

#define ISmsMessage_put_ValidityPeriod(This,newVal)	\
    (This)->lpVtbl -> put_ValidityPeriod(This,newVal)

#define ISmsMessage_get_SMSC(This,pVal)	\
    (This)->lpVtbl -> get_SMSC(This,pVal)

#define ISmsMessage_put_SMSC(This,newVal)	\
    (This)->lpVtbl -> put_SMSC(This,newVal)

#define ISmsMessage_get_Time(This,pVal)	\
    (This)->lpVtbl -> get_Time(This,pVal)

#define ISmsMessage_put_Time(This,newVal)	\
    (This)->lpVtbl -> put_Time(This,newVal)

#define ISmsMessage_get_TimeSecs(This,pVal)	\
    (This)->lpVtbl -> get_TimeSecs(This,pVal)

#define ISmsMessage_put_TimeSecs(This,newVal)	\
    (This)->lpVtbl -> put_TimeSecs(This,newVal)

#define ISmsMessage_get_PID(This,pVal)	\
    (This)->lpVtbl -> get_PID(This,pVal)

#define ISmsMessage_put_PID(This,newVal)	\
    (This)->lpVtbl -> put_PID(This,newVal)

#define ISmsMessage_get_DCS(This,pVal)	\
    (This)->lpVtbl -> get_DCS(This,pVal)

#define ISmsMessage_put_DCS(This,newVal)	\
    (This)->lpVtbl -> put_DCS(This,newVal)

#define ISmsMessage_get_ESM(This,pVal)	\
    (This)->lpVtbl -> get_ESM(This,pVal)

#define ISmsMessage_put_ESM(This,newVal)	\
    (This)->lpVtbl -> put_ESM(This,newVal)

#define ISmsMessage_get_SourceTON(This,pVal)	\
    (This)->lpVtbl -> get_SourceTON(This,pVal)

#define ISmsMessage_put_SourceTON(This,newVal)	\
    (This)->lpVtbl -> put_SourceTON(This,newVal)

#define ISmsMessage_get_SourceNPI(This,pVal)	\
    (This)->lpVtbl -> get_SourceNPI(This,pVal)

#define ISmsMessage_put_SourceNPI(This,newVal)	\
    (This)->lpVtbl -> put_SourceNPI(This,newVal)

#define ISmsMessage_get_DestinationTON(This,pVal)	\
    (This)->lpVtbl -> get_DestinationTON(This,pVal)

#define ISmsMessage_put_DestinationTON(This,newVal)	\
    (This)->lpVtbl -> put_DestinationTON(This,newVal)

#define ISmsMessage_get_DestinationNPI(This,pVal)	\
    (This)->lpVtbl -> get_DestinationNPI(This,pVal)

#define ISmsMessage_put_DestinationNPI(This,newVal)	\
    (This)->lpVtbl -> put_DestinationNPI(This,newVal)

#define ISmsMessage_get_ServiceType(This,pVal)	\
    (This)->lpVtbl -> get_ServiceType(This,pVal)

#define ISmsMessage_put_ServiceType(This,newVal)	\
    (This)->lpVtbl -> put_ServiceType(This,newVal)

#define ISmsMessage_get_RequestDeliveryStatus(This,pVal)	\
    (This)->lpVtbl -> get_RequestDeliveryStatus(This,pVal)

#define ISmsMessage_put_RequestDeliveryStatus(This,newVal)	\
    (This)->lpVtbl -> put_RequestDeliveryStatus(This,newVal)

#endif /* COBJMACROS */


#endif 	/* C style interface */



/* [id] */ HRESULT STDMETHODCALLTYPE ISmsMessage_Clear_Proxy( 
    ISmsMessage __RPC_FAR * This);


void __RPC_STUB ISmsMessage_Clear_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsMessage_get_Sender_Proxy( 
    ISmsMessage __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsMessage_get_Sender_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsMessage_put_Sender_Proxy( 
    ISmsMessage __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsMessage_put_Sender_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsMessage_get_Recipient_Proxy( 
    ISmsMessage __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsMessage_get_Recipient_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsMessage_put_Recipient_Proxy( 
    ISmsMessage __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsMessage_put_Recipient_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsMessage_get_Data_Proxy( 
    ISmsMessage __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsMessage_get_Data_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsMessage_put_Data_Proxy( 
    ISmsMessage __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsMessage_put_Data_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsMessage_get_Format_Proxy( 
    ISmsMessage __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsMessage_get_Format_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsMessage_put_Format_Proxy( 
    ISmsMessage __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB ISmsMessage_put_Format_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsMessage_get_ValidityPeriod_Proxy( 
    ISmsMessage __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsMessage_get_ValidityPeriod_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsMessage_put_ValidityPeriod_Proxy( 
    ISmsMessage __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB ISmsMessage_put_ValidityPeriod_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsMessage_get_SMSC_Proxy( 
    ISmsMessage __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsMessage_get_SMSC_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsMessage_put_SMSC_Proxy( 
    ISmsMessage __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsMessage_put_SMSC_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsMessage_get_Time_Proxy( 
    ISmsMessage __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsMessage_get_Time_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsMessage_put_Time_Proxy( 
    ISmsMessage __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsMessage_put_Time_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsMessage_get_TimeSecs_Proxy( 
    ISmsMessage __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsMessage_get_TimeSecs_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsMessage_put_TimeSecs_Proxy( 
    ISmsMessage __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB ISmsMessage_put_TimeSecs_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsMessage_get_PID_Proxy( 
    ISmsMessage __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsMessage_get_PID_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsMessage_put_PID_Proxy( 
    ISmsMessage __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB ISmsMessage_put_PID_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsMessage_get_DCS_Proxy( 
    ISmsMessage __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsMessage_get_DCS_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsMessage_put_DCS_Proxy( 
    ISmsMessage __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB ISmsMessage_put_DCS_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsMessage_get_ESM_Proxy( 
    ISmsMessage __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsMessage_get_ESM_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsMessage_put_ESM_Proxy( 
    ISmsMessage __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB ISmsMessage_put_ESM_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsMessage_get_SourceTON_Proxy( 
    ISmsMessage __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsMessage_get_SourceTON_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsMessage_put_SourceTON_Proxy( 
    ISmsMessage __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB ISmsMessage_put_SourceTON_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsMessage_get_SourceNPI_Proxy( 
    ISmsMessage __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsMessage_get_SourceNPI_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsMessage_put_SourceNPI_Proxy( 
    ISmsMessage __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB ISmsMessage_put_SourceNPI_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsMessage_get_DestinationTON_Proxy( 
    ISmsMessage __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsMessage_get_DestinationTON_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsMessage_put_DestinationTON_Proxy( 
    ISmsMessage __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB ISmsMessage_put_DestinationTON_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsMessage_get_DestinationNPI_Proxy( 
    ISmsMessage __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsMessage_get_DestinationNPI_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsMessage_put_DestinationNPI_Proxy( 
    ISmsMessage __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB ISmsMessage_put_DestinationNPI_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsMessage_get_ServiceType_Proxy( 
    ISmsMessage __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsMessage_get_ServiceType_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsMessage_put_ServiceType_Proxy( 
    ISmsMessage __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsMessage_put_ServiceType_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsMessage_get_RequestDeliveryStatus_Proxy( 
    ISmsMessage __RPC_FAR * This,
    /* [retval][out] */ BOOL __RPC_FAR *pVal);


void __RPC_STUB ISmsMessage_get_RequestDeliveryStatus_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsMessage_put_RequestDeliveryStatus_Proxy( 
    ISmsMessage __RPC_FAR * This,
    /* [in] */ BOOL newVal);


void __RPC_STUB ISmsMessage_put_RequestDeliveryStatus_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);



#endif 	/* __ISmsMessage_INTERFACE_DEFINED__ */


#ifndef __ISmsProtocolSmpp_INTERFACE_DEFINED__
#define __ISmsProtocolSmpp_INTERFACE_DEFINED__

/* interface ISmsProtocolSmpp */
/* [unique][helpstring][dual][uuid][object] */ 


EXTERN_C const IID IID_ISmsProtocolSmpp;

#if defined(__cplusplus) && !defined(CINTERFACE)
    
    MIDL_INTERFACE("FDFEC40E-1773-488E-86DC-D4C5CFD0BF10")
    ISmsProtocolSmpp : public IDispatch
    {
    public:
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_LastError( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Version( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Build( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ExpirationDate( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_Reserved( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_LogFile( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_LogFile( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ActivityFile( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_ActivityFile( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_DistributionID( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_DistributionKey( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE Clear( void) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE GetErrorDescription( 
            LONG newVal,
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE Activate( 
            BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Server( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_Server( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ServerPort( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_ServerPort( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ServerTimeout( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_ServerTimeout( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ServerKeepAlive( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_ServerKeepAlive( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_SystemID( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_SystemID( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_SystemPassword( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_SystemPassword( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_SystemType( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_SystemType( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_SystemMode( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_SystemMode( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_SystemVersion( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_SystemVersion( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_SystemSourceAddress( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_SystemSourceAddress( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_SystemSourceTON( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_SystemSourceTON( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_SystemSourceNPI( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_SystemSourceNPI( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_SystemThroughput( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_SystemThroughput( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_SystemCharSet( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_SystemCharSet( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_AddressRange( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_AddressRange( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_IsConnected( 
            /* [retval][out] */ BOOL __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_SystemDestinationTON( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_SystemDestinationTON( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_SystemDestinationNPI( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_SystemDestinationNPI( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_AdvancedSettings( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_AdvancedSettings( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE Connect( void) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE Disconnect( void) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE Send( 
            VARIANT __RPC_FAR *pMessage,
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE SetTLVValue( 
            LONG lType,
            LONG lTLV,
            VARIANT newVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE GetTLVValue( 
            LONG lTLV,
            /* [retval][out] */ VARIANT __RPC_FAR *pVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE QueryStatus( 
            BSTR bstrRef,
            /* [retval][out] */ VARIANT __RPC_FAR *pVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE Cancel( 
            BSTR bstrRef) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE GetFirstMessage( 
            /* [retval][out] */ VARIANT __RPC_FAR *pVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE GetNextMessage( 
            /* [retval][out] */ VARIANT __RPC_FAR *pVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE ProviderLoadConfig( 
            BSTR bstrConfigFile) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE ProviderSaveConfig( 
            BSTR bstrConfigFile) = 0;
        
    };
    
#else 	/* C style interface */

    typedef struct ISmsProtocolSmppVtbl
    {
        BEGIN_INTERFACE
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *QueryInterface )( 
            ISmsProtocolSmpp __RPC_FAR * This,
            /* [in] */ REFIID riid,
            /* [iid_is][out] */ void __RPC_FAR *__RPC_FAR *ppvObject);
        
        ULONG ( STDMETHODCALLTYPE __RPC_FAR *AddRef )( 
            ISmsProtocolSmpp __RPC_FAR * This);
        
        ULONG ( STDMETHODCALLTYPE __RPC_FAR *Release )( 
            ISmsProtocolSmpp __RPC_FAR * This);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetTypeInfoCount )( 
            ISmsProtocolSmpp __RPC_FAR * This,
            /* [out] */ UINT __RPC_FAR *pctinfo);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetTypeInfo )( 
            ISmsProtocolSmpp __RPC_FAR * This,
            /* [in] */ UINT iTInfo,
            /* [in] */ LCID lcid,
            /* [out] */ ITypeInfo __RPC_FAR *__RPC_FAR *ppTInfo);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetIDsOfNames )( 
            ISmsProtocolSmpp __RPC_FAR * This,
            /* [in] */ REFIID riid,
            /* [size_is][in] */ LPOLESTR __RPC_FAR *rgszNames,
            /* [in] */ UINT cNames,
            /* [in] */ LCID lcid,
            /* [size_is][out] */ DISPID __RPC_FAR *rgDispId);
        
        /* [local] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Invoke )( 
            ISmsProtocolSmpp __RPC_FAR * This,
            /* [in] */ DISPID dispIdMember,
            /* [in] */ REFIID riid,
            /* [in] */ LCID lcid,
            /* [in] */ WORD wFlags,
            /* [out][in] */ DISPPARAMS __RPC_FAR *pDispParams,
            /* [out] */ VARIANT __RPC_FAR *pVarResult,
            /* [out] */ EXCEPINFO __RPC_FAR *pExcepInfo,
            /* [out] */ UINT __RPC_FAR *puArgErr);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_LastError )( 
            ISmsProtocolSmpp __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Version )( 
            ISmsProtocolSmpp __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Build )( 
            ISmsProtocolSmpp __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ExpirationDate )( 
            ISmsProtocolSmpp __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_Reserved )( 
            ISmsProtocolSmpp __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_LogFile )( 
            ISmsProtocolSmpp __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_LogFile )( 
            ISmsProtocolSmpp __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ActivityFile )( 
            ISmsProtocolSmpp __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_ActivityFile )( 
            ISmsProtocolSmpp __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_DistributionID )( 
            ISmsProtocolSmpp __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_DistributionKey )( 
            ISmsProtocolSmpp __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Clear )( 
            ISmsProtocolSmpp __RPC_FAR * This);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetErrorDescription )( 
            ISmsProtocolSmpp __RPC_FAR * This,
            LONG newVal,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Activate )( 
            ISmsProtocolSmpp __RPC_FAR * This,
            BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Server )( 
            ISmsProtocolSmpp __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_Server )( 
            ISmsProtocolSmpp __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ServerPort )( 
            ISmsProtocolSmpp __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_ServerPort )( 
            ISmsProtocolSmpp __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ServerTimeout )( 
            ISmsProtocolSmpp __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_ServerTimeout )( 
            ISmsProtocolSmpp __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ServerKeepAlive )( 
            ISmsProtocolSmpp __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_ServerKeepAlive )( 
            ISmsProtocolSmpp __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_SystemID )( 
            ISmsProtocolSmpp __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_SystemID )( 
            ISmsProtocolSmpp __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_SystemPassword )( 
            ISmsProtocolSmpp __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_SystemPassword )( 
            ISmsProtocolSmpp __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_SystemType )( 
            ISmsProtocolSmpp __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_SystemType )( 
            ISmsProtocolSmpp __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_SystemMode )( 
            ISmsProtocolSmpp __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_SystemMode )( 
            ISmsProtocolSmpp __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_SystemVersion )( 
            ISmsProtocolSmpp __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_SystemVersion )( 
            ISmsProtocolSmpp __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_SystemSourceAddress )( 
            ISmsProtocolSmpp __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_SystemSourceAddress )( 
            ISmsProtocolSmpp __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_SystemSourceTON )( 
            ISmsProtocolSmpp __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_SystemSourceTON )( 
            ISmsProtocolSmpp __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_SystemSourceNPI )( 
            ISmsProtocolSmpp __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_SystemSourceNPI )( 
            ISmsProtocolSmpp __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_SystemThroughput )( 
            ISmsProtocolSmpp __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_SystemThroughput )( 
            ISmsProtocolSmpp __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_SystemCharSet )( 
            ISmsProtocolSmpp __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_SystemCharSet )( 
            ISmsProtocolSmpp __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_AddressRange )( 
            ISmsProtocolSmpp __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_AddressRange )( 
            ISmsProtocolSmpp __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_IsConnected )( 
            ISmsProtocolSmpp __RPC_FAR * This,
            /* [retval][out] */ BOOL __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_SystemDestinationTON )( 
            ISmsProtocolSmpp __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_SystemDestinationTON )( 
            ISmsProtocolSmpp __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_SystemDestinationNPI )( 
            ISmsProtocolSmpp __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_SystemDestinationNPI )( 
            ISmsProtocolSmpp __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_AdvancedSettings )( 
            ISmsProtocolSmpp __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_AdvancedSettings )( 
            ISmsProtocolSmpp __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Connect )( 
            ISmsProtocolSmpp __RPC_FAR * This);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Disconnect )( 
            ISmsProtocolSmpp __RPC_FAR * This);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Send )( 
            ISmsProtocolSmpp __RPC_FAR * This,
            VARIANT __RPC_FAR *pMessage,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *SetTLVValue )( 
            ISmsProtocolSmpp __RPC_FAR * This,
            LONG lType,
            LONG lTLV,
            VARIANT newVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetTLVValue )( 
            ISmsProtocolSmpp __RPC_FAR * This,
            LONG lTLV,
            /* [retval][out] */ VARIANT __RPC_FAR *pVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *QueryStatus )( 
            ISmsProtocolSmpp __RPC_FAR * This,
            BSTR bstrRef,
            /* [retval][out] */ VARIANT __RPC_FAR *pVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Cancel )( 
            ISmsProtocolSmpp __RPC_FAR * This,
            BSTR bstrRef);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetFirstMessage )( 
            ISmsProtocolSmpp __RPC_FAR * This,
            /* [retval][out] */ VARIANT __RPC_FAR *pVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetNextMessage )( 
            ISmsProtocolSmpp __RPC_FAR * This,
            /* [retval][out] */ VARIANT __RPC_FAR *pVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *ProviderLoadConfig )( 
            ISmsProtocolSmpp __RPC_FAR * This,
            BSTR bstrConfigFile);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *ProviderSaveConfig )( 
            ISmsProtocolSmpp __RPC_FAR * This,
            BSTR bstrConfigFile);
        
        END_INTERFACE
    } ISmsProtocolSmppVtbl;

    interface ISmsProtocolSmpp
    {
        CONST_VTBL struct ISmsProtocolSmppVtbl __RPC_FAR *lpVtbl;
    };

    

#ifdef COBJMACROS


#define ISmsProtocolSmpp_QueryInterface(This,riid,ppvObject)	\
    (This)->lpVtbl -> QueryInterface(This,riid,ppvObject)

#define ISmsProtocolSmpp_AddRef(This)	\
    (This)->lpVtbl -> AddRef(This)

#define ISmsProtocolSmpp_Release(This)	\
    (This)->lpVtbl -> Release(This)


#define ISmsProtocolSmpp_GetTypeInfoCount(This,pctinfo)	\
    (This)->lpVtbl -> GetTypeInfoCount(This,pctinfo)

#define ISmsProtocolSmpp_GetTypeInfo(This,iTInfo,lcid,ppTInfo)	\
    (This)->lpVtbl -> GetTypeInfo(This,iTInfo,lcid,ppTInfo)

#define ISmsProtocolSmpp_GetIDsOfNames(This,riid,rgszNames,cNames,lcid,rgDispId)	\
    (This)->lpVtbl -> GetIDsOfNames(This,riid,rgszNames,cNames,lcid,rgDispId)

#define ISmsProtocolSmpp_Invoke(This,dispIdMember,riid,lcid,wFlags,pDispParams,pVarResult,pExcepInfo,puArgErr)	\
    (This)->lpVtbl -> Invoke(This,dispIdMember,riid,lcid,wFlags,pDispParams,pVarResult,pExcepInfo,puArgErr)


#define ISmsProtocolSmpp_get_LastError(This,pVal)	\
    (This)->lpVtbl -> get_LastError(This,pVal)

#define ISmsProtocolSmpp_get_Version(This,pVal)	\
    (This)->lpVtbl -> get_Version(This,pVal)

#define ISmsProtocolSmpp_get_Build(This,pVal)	\
    (This)->lpVtbl -> get_Build(This,pVal)

#define ISmsProtocolSmpp_get_ExpirationDate(This,pVal)	\
    (This)->lpVtbl -> get_ExpirationDate(This,pVal)

#define ISmsProtocolSmpp_put_Reserved(This,newVal)	\
    (This)->lpVtbl -> put_Reserved(This,newVal)

#define ISmsProtocolSmpp_get_LogFile(This,pVal)	\
    (This)->lpVtbl -> get_LogFile(This,pVal)

#define ISmsProtocolSmpp_put_LogFile(This,newVal)	\
    (This)->lpVtbl -> put_LogFile(This,newVal)

#define ISmsProtocolSmpp_get_ActivityFile(This,pVal)	\
    (This)->lpVtbl -> get_ActivityFile(This,pVal)

#define ISmsProtocolSmpp_put_ActivityFile(This,newVal)	\
    (This)->lpVtbl -> put_ActivityFile(This,newVal)

#define ISmsProtocolSmpp_put_DistributionID(This,newVal)	\
    (This)->lpVtbl -> put_DistributionID(This,newVal)

#define ISmsProtocolSmpp_put_DistributionKey(This,newVal)	\
    (This)->lpVtbl -> put_DistributionKey(This,newVal)

#define ISmsProtocolSmpp_Clear(This)	\
    (This)->lpVtbl -> Clear(This)

#define ISmsProtocolSmpp_GetErrorDescription(This,newVal,pVal)	\
    (This)->lpVtbl -> GetErrorDescription(This,newVal,pVal)

#define ISmsProtocolSmpp_Activate(This,newVal)	\
    (This)->lpVtbl -> Activate(This,newVal)

#define ISmsProtocolSmpp_get_Server(This,pVal)	\
    (This)->lpVtbl -> get_Server(This,pVal)

#define ISmsProtocolSmpp_put_Server(This,newVal)	\
    (This)->lpVtbl -> put_Server(This,newVal)

#define ISmsProtocolSmpp_get_ServerPort(This,pVal)	\
    (This)->lpVtbl -> get_ServerPort(This,pVal)

#define ISmsProtocolSmpp_put_ServerPort(This,newVal)	\
    (This)->lpVtbl -> put_ServerPort(This,newVal)

#define ISmsProtocolSmpp_get_ServerTimeout(This,pVal)	\
    (This)->lpVtbl -> get_ServerTimeout(This,pVal)

#define ISmsProtocolSmpp_put_ServerTimeout(This,newVal)	\
    (This)->lpVtbl -> put_ServerTimeout(This,newVal)

#define ISmsProtocolSmpp_get_ServerKeepAlive(This,pVal)	\
    (This)->lpVtbl -> get_ServerKeepAlive(This,pVal)

#define ISmsProtocolSmpp_put_ServerKeepAlive(This,newVal)	\
    (This)->lpVtbl -> put_ServerKeepAlive(This,newVal)

#define ISmsProtocolSmpp_get_SystemID(This,pVal)	\
    (This)->lpVtbl -> get_SystemID(This,pVal)

#define ISmsProtocolSmpp_put_SystemID(This,newVal)	\
    (This)->lpVtbl -> put_SystemID(This,newVal)

#define ISmsProtocolSmpp_get_SystemPassword(This,pVal)	\
    (This)->lpVtbl -> get_SystemPassword(This,pVal)

#define ISmsProtocolSmpp_put_SystemPassword(This,newVal)	\
    (This)->lpVtbl -> put_SystemPassword(This,newVal)

#define ISmsProtocolSmpp_get_SystemType(This,pVal)	\
    (This)->lpVtbl -> get_SystemType(This,pVal)

#define ISmsProtocolSmpp_put_SystemType(This,newVal)	\
    (This)->lpVtbl -> put_SystemType(This,newVal)

#define ISmsProtocolSmpp_get_SystemMode(This,pVal)	\
    (This)->lpVtbl -> get_SystemMode(This,pVal)

#define ISmsProtocolSmpp_put_SystemMode(This,newVal)	\
    (This)->lpVtbl -> put_SystemMode(This,newVal)

#define ISmsProtocolSmpp_get_SystemVersion(This,pVal)	\
    (This)->lpVtbl -> get_SystemVersion(This,pVal)

#define ISmsProtocolSmpp_put_SystemVersion(This,newVal)	\
    (This)->lpVtbl -> put_SystemVersion(This,newVal)

#define ISmsProtocolSmpp_get_SystemSourceAddress(This,pVal)	\
    (This)->lpVtbl -> get_SystemSourceAddress(This,pVal)

#define ISmsProtocolSmpp_put_SystemSourceAddress(This,newVal)	\
    (This)->lpVtbl -> put_SystemSourceAddress(This,newVal)

#define ISmsProtocolSmpp_get_SystemSourceTON(This,pVal)	\
    (This)->lpVtbl -> get_SystemSourceTON(This,pVal)

#define ISmsProtocolSmpp_put_SystemSourceTON(This,newVal)	\
    (This)->lpVtbl -> put_SystemSourceTON(This,newVal)

#define ISmsProtocolSmpp_get_SystemSourceNPI(This,pVal)	\
    (This)->lpVtbl -> get_SystemSourceNPI(This,pVal)

#define ISmsProtocolSmpp_put_SystemSourceNPI(This,newVal)	\
    (This)->lpVtbl -> put_SystemSourceNPI(This,newVal)

#define ISmsProtocolSmpp_get_SystemThroughput(This,pVal)	\
    (This)->lpVtbl -> get_SystemThroughput(This,pVal)

#define ISmsProtocolSmpp_put_SystemThroughput(This,newVal)	\
    (This)->lpVtbl -> put_SystemThroughput(This,newVal)

#define ISmsProtocolSmpp_get_SystemCharSet(This,pVal)	\
    (This)->lpVtbl -> get_SystemCharSet(This,pVal)

#define ISmsProtocolSmpp_put_SystemCharSet(This,newVal)	\
    (This)->lpVtbl -> put_SystemCharSet(This,newVal)

#define ISmsProtocolSmpp_get_AddressRange(This,pVal)	\
    (This)->lpVtbl -> get_AddressRange(This,pVal)

#define ISmsProtocolSmpp_put_AddressRange(This,newVal)	\
    (This)->lpVtbl -> put_AddressRange(This,newVal)

#define ISmsProtocolSmpp_get_IsConnected(This,pVal)	\
    (This)->lpVtbl -> get_IsConnected(This,pVal)

#define ISmsProtocolSmpp_get_SystemDestinationTON(This,pVal)	\
    (This)->lpVtbl -> get_SystemDestinationTON(This,pVal)

#define ISmsProtocolSmpp_put_SystemDestinationTON(This,newVal)	\
    (This)->lpVtbl -> put_SystemDestinationTON(This,newVal)

#define ISmsProtocolSmpp_get_SystemDestinationNPI(This,pVal)	\
    (This)->lpVtbl -> get_SystemDestinationNPI(This,pVal)

#define ISmsProtocolSmpp_put_SystemDestinationNPI(This,newVal)	\
    (This)->lpVtbl -> put_SystemDestinationNPI(This,newVal)

#define ISmsProtocolSmpp_get_AdvancedSettings(This,pVal)	\
    (This)->lpVtbl -> get_AdvancedSettings(This,pVal)

#define ISmsProtocolSmpp_put_AdvancedSettings(This,newVal)	\
    (This)->lpVtbl -> put_AdvancedSettings(This,newVal)

#define ISmsProtocolSmpp_Connect(This)	\
    (This)->lpVtbl -> Connect(This)

#define ISmsProtocolSmpp_Disconnect(This)	\
    (This)->lpVtbl -> Disconnect(This)

#define ISmsProtocolSmpp_Send(This,pMessage,pVal)	\
    (This)->lpVtbl -> Send(This,pMessage,pVal)

#define ISmsProtocolSmpp_SetTLVValue(This,lType,lTLV,newVal)	\
    (This)->lpVtbl -> SetTLVValue(This,lType,lTLV,newVal)

#define ISmsProtocolSmpp_GetTLVValue(This,lTLV,pVal)	\
    (This)->lpVtbl -> GetTLVValue(This,lTLV,pVal)

#define ISmsProtocolSmpp_QueryStatus(This,bstrRef,pVal)	\
    (This)->lpVtbl -> QueryStatus(This,bstrRef,pVal)

#define ISmsProtocolSmpp_Cancel(This,bstrRef)	\
    (This)->lpVtbl -> Cancel(This,bstrRef)

#define ISmsProtocolSmpp_GetFirstMessage(This,pVal)	\
    (This)->lpVtbl -> GetFirstMessage(This,pVal)

#define ISmsProtocolSmpp_GetNextMessage(This,pVal)	\
    (This)->lpVtbl -> GetNextMessage(This,pVal)

#define ISmsProtocolSmpp_ProviderLoadConfig(This,bstrConfigFile)	\
    (This)->lpVtbl -> ProviderLoadConfig(This,bstrConfigFile)

#define ISmsProtocolSmpp_ProviderSaveConfig(This,bstrConfigFile)	\
    (This)->lpVtbl -> ProviderSaveConfig(This,bstrConfigFile)

#endif /* COBJMACROS */


#endif 	/* C style interface */



/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolSmpp_get_LastError_Proxy( 
    ISmsProtocolSmpp __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolSmpp_get_LastError_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolSmpp_get_Version_Proxy( 
    ISmsProtocolSmpp __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolSmpp_get_Version_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolSmpp_get_Build_Proxy( 
    ISmsProtocolSmpp __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolSmpp_get_Build_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolSmpp_get_ExpirationDate_Proxy( 
    ISmsProtocolSmpp __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolSmpp_get_ExpirationDate_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolSmpp_put_Reserved_Proxy( 
    ISmsProtocolSmpp __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB ISmsProtocolSmpp_put_Reserved_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolSmpp_get_LogFile_Proxy( 
    ISmsProtocolSmpp __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolSmpp_get_LogFile_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolSmpp_put_LogFile_Proxy( 
    ISmsProtocolSmpp __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsProtocolSmpp_put_LogFile_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolSmpp_get_ActivityFile_Proxy( 
    ISmsProtocolSmpp __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolSmpp_get_ActivityFile_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolSmpp_put_ActivityFile_Proxy( 
    ISmsProtocolSmpp __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsProtocolSmpp_put_ActivityFile_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolSmpp_put_DistributionID_Proxy( 
    ISmsProtocolSmpp __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsProtocolSmpp_put_DistributionID_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolSmpp_put_DistributionKey_Proxy( 
    ISmsProtocolSmpp __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsProtocolSmpp_put_DistributionKey_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsProtocolSmpp_Clear_Proxy( 
    ISmsProtocolSmpp __RPC_FAR * This);


void __RPC_STUB ISmsProtocolSmpp_Clear_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsProtocolSmpp_GetErrorDescription_Proxy( 
    ISmsProtocolSmpp __RPC_FAR * This,
    LONG newVal,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolSmpp_GetErrorDescription_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsProtocolSmpp_Activate_Proxy( 
    ISmsProtocolSmpp __RPC_FAR * This,
    BSTR newVal);


void __RPC_STUB ISmsProtocolSmpp_Activate_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolSmpp_get_Server_Proxy( 
    ISmsProtocolSmpp __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolSmpp_get_Server_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolSmpp_put_Server_Proxy( 
    ISmsProtocolSmpp __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsProtocolSmpp_put_Server_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolSmpp_get_ServerPort_Proxy( 
    ISmsProtocolSmpp __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolSmpp_get_ServerPort_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolSmpp_put_ServerPort_Proxy( 
    ISmsProtocolSmpp __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB ISmsProtocolSmpp_put_ServerPort_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolSmpp_get_ServerTimeout_Proxy( 
    ISmsProtocolSmpp __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolSmpp_get_ServerTimeout_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolSmpp_put_ServerTimeout_Proxy( 
    ISmsProtocolSmpp __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB ISmsProtocolSmpp_put_ServerTimeout_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolSmpp_get_ServerKeepAlive_Proxy( 
    ISmsProtocolSmpp __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolSmpp_get_ServerKeepAlive_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolSmpp_put_ServerKeepAlive_Proxy( 
    ISmsProtocolSmpp __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB ISmsProtocolSmpp_put_ServerKeepAlive_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolSmpp_get_SystemID_Proxy( 
    ISmsProtocolSmpp __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolSmpp_get_SystemID_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolSmpp_put_SystemID_Proxy( 
    ISmsProtocolSmpp __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsProtocolSmpp_put_SystemID_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolSmpp_get_SystemPassword_Proxy( 
    ISmsProtocolSmpp __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolSmpp_get_SystemPassword_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolSmpp_put_SystemPassword_Proxy( 
    ISmsProtocolSmpp __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsProtocolSmpp_put_SystemPassword_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolSmpp_get_SystemType_Proxy( 
    ISmsProtocolSmpp __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolSmpp_get_SystemType_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolSmpp_put_SystemType_Proxy( 
    ISmsProtocolSmpp __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsProtocolSmpp_put_SystemType_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolSmpp_get_SystemMode_Proxy( 
    ISmsProtocolSmpp __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolSmpp_get_SystemMode_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolSmpp_put_SystemMode_Proxy( 
    ISmsProtocolSmpp __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB ISmsProtocolSmpp_put_SystemMode_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolSmpp_get_SystemVersion_Proxy( 
    ISmsProtocolSmpp __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolSmpp_get_SystemVersion_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolSmpp_put_SystemVersion_Proxy( 
    ISmsProtocolSmpp __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB ISmsProtocolSmpp_put_SystemVersion_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolSmpp_get_SystemSourceAddress_Proxy( 
    ISmsProtocolSmpp __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolSmpp_get_SystemSourceAddress_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolSmpp_put_SystemSourceAddress_Proxy( 
    ISmsProtocolSmpp __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsProtocolSmpp_put_SystemSourceAddress_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolSmpp_get_SystemSourceTON_Proxy( 
    ISmsProtocolSmpp __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolSmpp_get_SystemSourceTON_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolSmpp_put_SystemSourceTON_Proxy( 
    ISmsProtocolSmpp __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB ISmsProtocolSmpp_put_SystemSourceTON_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolSmpp_get_SystemSourceNPI_Proxy( 
    ISmsProtocolSmpp __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolSmpp_get_SystemSourceNPI_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolSmpp_put_SystemSourceNPI_Proxy( 
    ISmsProtocolSmpp __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB ISmsProtocolSmpp_put_SystemSourceNPI_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolSmpp_get_SystemThroughput_Proxy( 
    ISmsProtocolSmpp __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolSmpp_get_SystemThroughput_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolSmpp_put_SystemThroughput_Proxy( 
    ISmsProtocolSmpp __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB ISmsProtocolSmpp_put_SystemThroughput_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolSmpp_get_SystemCharSet_Proxy( 
    ISmsProtocolSmpp __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolSmpp_get_SystemCharSet_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolSmpp_put_SystemCharSet_Proxy( 
    ISmsProtocolSmpp __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB ISmsProtocolSmpp_put_SystemCharSet_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolSmpp_get_AddressRange_Proxy( 
    ISmsProtocolSmpp __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolSmpp_get_AddressRange_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolSmpp_put_AddressRange_Proxy( 
    ISmsProtocolSmpp __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsProtocolSmpp_put_AddressRange_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolSmpp_get_IsConnected_Proxy( 
    ISmsProtocolSmpp __RPC_FAR * This,
    /* [retval][out] */ BOOL __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolSmpp_get_IsConnected_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolSmpp_get_SystemDestinationTON_Proxy( 
    ISmsProtocolSmpp __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolSmpp_get_SystemDestinationTON_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolSmpp_put_SystemDestinationTON_Proxy( 
    ISmsProtocolSmpp __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB ISmsProtocolSmpp_put_SystemDestinationTON_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolSmpp_get_SystemDestinationNPI_Proxy( 
    ISmsProtocolSmpp __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolSmpp_get_SystemDestinationNPI_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolSmpp_put_SystemDestinationNPI_Proxy( 
    ISmsProtocolSmpp __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB ISmsProtocolSmpp_put_SystemDestinationNPI_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolSmpp_get_AdvancedSettings_Proxy( 
    ISmsProtocolSmpp __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolSmpp_get_AdvancedSettings_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolSmpp_put_AdvancedSettings_Proxy( 
    ISmsProtocolSmpp __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsProtocolSmpp_put_AdvancedSettings_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsProtocolSmpp_Connect_Proxy( 
    ISmsProtocolSmpp __RPC_FAR * This);


void __RPC_STUB ISmsProtocolSmpp_Connect_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsProtocolSmpp_Disconnect_Proxy( 
    ISmsProtocolSmpp __RPC_FAR * This);


void __RPC_STUB ISmsProtocolSmpp_Disconnect_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsProtocolSmpp_Send_Proxy( 
    ISmsProtocolSmpp __RPC_FAR * This,
    VARIANT __RPC_FAR *pMessage,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolSmpp_Send_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsProtocolSmpp_SetTLVValue_Proxy( 
    ISmsProtocolSmpp __RPC_FAR * This,
    LONG lType,
    LONG lTLV,
    VARIANT newVal);


void __RPC_STUB ISmsProtocolSmpp_SetTLVValue_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsProtocolSmpp_GetTLVValue_Proxy( 
    ISmsProtocolSmpp __RPC_FAR * This,
    LONG lTLV,
    /* [retval][out] */ VARIANT __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolSmpp_GetTLVValue_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsProtocolSmpp_QueryStatus_Proxy( 
    ISmsProtocolSmpp __RPC_FAR * This,
    BSTR bstrRef,
    /* [retval][out] */ VARIANT __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolSmpp_QueryStatus_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsProtocolSmpp_Cancel_Proxy( 
    ISmsProtocolSmpp __RPC_FAR * This,
    BSTR bstrRef);


void __RPC_STUB ISmsProtocolSmpp_Cancel_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsProtocolSmpp_GetFirstMessage_Proxy( 
    ISmsProtocolSmpp __RPC_FAR * This,
    /* [retval][out] */ VARIANT __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolSmpp_GetFirstMessage_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsProtocolSmpp_GetNextMessage_Proxy( 
    ISmsProtocolSmpp __RPC_FAR * This,
    /* [retval][out] */ VARIANT __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolSmpp_GetNextMessage_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsProtocolSmpp_ProviderLoadConfig_Proxy( 
    ISmsProtocolSmpp __RPC_FAR * This,
    BSTR bstrConfigFile);


void __RPC_STUB ISmsProtocolSmpp_ProviderLoadConfig_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsProtocolSmpp_ProviderSaveConfig_Proxy( 
    ISmsProtocolSmpp __RPC_FAR * This,
    BSTR bstrConfigFile);


void __RPC_STUB ISmsProtocolSmpp_ProviderSaveConfig_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);



#endif 	/* __ISmsProtocolSmpp_INTERFACE_DEFINED__ */


#ifndef __ISmsConstants_INTERFACE_DEFINED__
#define __ISmsConstants_INTERFACE_DEFINED__

/* interface ISmsConstants */
/* [unique][helpstring][dual][uuid][object] */ 


EXTERN_C const IID IID_ISmsConstants;

#if defined(__cplusplus) && !defined(CINTERFACE)
    
    MIDL_INTERFACE("B20DC41C-F2CB-4B5A-B174-73CEA23BF84B")
    ISmsConstants : public IDispatch
    {
    public:
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMESSAGEFORMAT_TEXT( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMESSAGEFORMAT_TEXT_FLASH( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMESSAGEFORMAT_TEXT_MULTIPART( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMESSAGEFORMAT_TEXT_MULTIPART_FLASH( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMESSAGEFORMAT_DATA( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMESSAGEFORMAT_DATA_UDH( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMESSAGEFORMAT_UNICODE( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMESSAGEFORMAT_UNICODE_FLASH( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMESSAGEFORMAT_UNICODE_MULTIPART( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMESSAGEFORMAT_UNICODE_MULTIPART_FLASH( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMESSAGEFORMAT_REPORT( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMESSAGEFORMAT_NOTIFICATION_VOICEMAIL( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMESSAGEFORMAT_NOTIFICATION_FAX( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMESSAGEFORMAT_NOTIFICATION_EMAIL( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMESSAGEFORMAT_NOTIFICATION_MMS( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asSMPPMODE_TRANSCEIVER( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asSMPPMODE_TRANSMITTER( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asSMPPMODE_RECEIVER( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asPROVIDERTYPE_UCP( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asPROVIDERTYPE_TAP_DEFAULT( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asPROVIDERTYPE_TAP_NOLF( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asPROVIDERTYPE_TAP_NOEOT( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asDIALMODE_TONE( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asDIALMODE_PULSE( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asSMPPVERSION_33( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asSMPPVERSION_34( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asSMPPVERSION_50( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asSMPP_TLV_1BYTE( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asSMPP_TLV_2BYTE( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asSMPP_TLV_4BYTE( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asSMPP_TLV_COCTET( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asSMPP_TLV_OCTET( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asSMPP_TLV_VARIABLE( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asDELIVERYSTATUS_SCHEDULED( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asDELIVERYSTATUS_ENROUTE( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asDELIVERYSTATUS_DELIVERED( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asDELIVERYSTATUS_EXPIRED( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asDELIVERYSTATUS_DELETED( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asDELIVERYSTATUS_UNDELIVERABLE( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asDELIVERYSTATUS_ACCEPTED( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asDELIVERYSTATUS_UNKNOWN( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asDELIVERYSTATUS_REJECTED( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asDELIVERYSTATUS_SKIPPED( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asDELIVERYSTATUS_SUBMITTED( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asWAPPUSH_SERVICE_INDICATION( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asWAPPUSH_SERVICE_LOAD( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asWAPPUSHSIGNAL_NONE( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asWAPPUSHSIGNAL_LOW( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asWAPPUSHSIGNAL_MEDIUM( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asWAPPUSHSIGNAL_HIGH( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asWAPPUSHSIGNAL_DELETE( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asWAPPUSH_ACTION_EXECUTE_LOW( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asWAPPUSH_ACTION_EXECUTE_HIGH( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asWAPPUSH_ACTION_CACHE( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asPICTURE_MESSAGE( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asPICTURE_CALLERGROUP( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asPICTURE_OPERATORLOGO( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asPICTURE_OPERATORLOGO_RESTORE( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asDEVICESETTINGS_DEFAULT( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asDEVICESETTINGS_8N1( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asDEVICESETTINGS_7E1( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asSMPPCHARSET_DEFAULT( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asSMPPCHARSET_GSM( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asSMPPCHARSET_ASCII( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asSMPPCHARSET_LATIN( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asSMPPCHARSET_JIS( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asSMPPCHARSET_CYRILLIC( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asSMPPCHARSET_HEBREW( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asSMPPCHARSET_JAPANESE( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asSMPPCHARSET_GREEK( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asSTORAGE_ALL( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asSTORAGE_SIM( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asSTORAGE_DEVICE( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asSTORAGE_COMBINED( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asSTORAGE_REPORTS( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asDEVICEFLOWCONTROL_DEFAULT( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asDEVICEFLOWCONTROL_ENABLE( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asDEVICEFLOWCONTROL_DISABLE( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMMS_CLASS_ADVERTISEMENT( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMMS_CLASS_INFORMATIONAL( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMMS_CLASS_AUTO( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMMS_CLASS_PERSONAL( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
    };
    
#else 	/* C style interface */

    typedef struct ISmsConstantsVtbl
    {
        BEGIN_INTERFACE
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *QueryInterface )( 
            ISmsConstants __RPC_FAR * This,
            /* [in] */ REFIID riid,
            /* [iid_is][out] */ void __RPC_FAR *__RPC_FAR *ppvObject);
        
        ULONG ( STDMETHODCALLTYPE __RPC_FAR *AddRef )( 
            ISmsConstants __RPC_FAR * This);
        
        ULONG ( STDMETHODCALLTYPE __RPC_FAR *Release )( 
            ISmsConstants __RPC_FAR * This);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetTypeInfoCount )( 
            ISmsConstants __RPC_FAR * This,
            /* [out] */ UINT __RPC_FAR *pctinfo);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetTypeInfo )( 
            ISmsConstants __RPC_FAR * This,
            /* [in] */ UINT iTInfo,
            /* [in] */ LCID lcid,
            /* [out] */ ITypeInfo __RPC_FAR *__RPC_FAR *ppTInfo);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetIDsOfNames )( 
            ISmsConstants __RPC_FAR * This,
            /* [in] */ REFIID riid,
            /* [size_is][in] */ LPOLESTR __RPC_FAR *rgszNames,
            /* [in] */ UINT cNames,
            /* [in] */ LCID lcid,
            /* [size_is][out] */ DISPID __RPC_FAR *rgDispId);
        
        /* [local] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Invoke )( 
            ISmsConstants __RPC_FAR * This,
            /* [in] */ DISPID dispIdMember,
            /* [in] */ REFIID riid,
            /* [in] */ LCID lcid,
            /* [in] */ WORD wFlags,
            /* [out][in] */ DISPPARAMS __RPC_FAR *pDispParams,
            /* [out] */ VARIANT __RPC_FAR *pVarResult,
            /* [out] */ EXCEPINFO __RPC_FAR *pExcepInfo,
            /* [out] */ UINT __RPC_FAR *puArgErr);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMESSAGEFORMAT_TEXT )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMESSAGEFORMAT_TEXT_FLASH )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMESSAGEFORMAT_TEXT_MULTIPART )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMESSAGEFORMAT_TEXT_MULTIPART_FLASH )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMESSAGEFORMAT_DATA )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMESSAGEFORMAT_DATA_UDH )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMESSAGEFORMAT_UNICODE )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMESSAGEFORMAT_UNICODE_FLASH )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMESSAGEFORMAT_UNICODE_MULTIPART )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMESSAGEFORMAT_UNICODE_MULTIPART_FLASH )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMESSAGEFORMAT_REPORT )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMESSAGEFORMAT_NOTIFICATION_VOICEMAIL )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMESSAGEFORMAT_NOTIFICATION_FAX )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMESSAGEFORMAT_NOTIFICATION_EMAIL )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMESSAGEFORMAT_NOTIFICATION_MMS )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asSMPPMODE_TRANSCEIVER )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asSMPPMODE_TRANSMITTER )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asSMPPMODE_RECEIVER )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asPROVIDERTYPE_UCP )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asPROVIDERTYPE_TAP_DEFAULT )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asPROVIDERTYPE_TAP_NOLF )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asPROVIDERTYPE_TAP_NOEOT )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asDIALMODE_TONE )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asDIALMODE_PULSE )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asSMPPVERSION_33 )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asSMPPVERSION_34 )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asSMPPVERSION_50 )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asSMPP_TLV_1BYTE )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asSMPP_TLV_2BYTE )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asSMPP_TLV_4BYTE )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asSMPP_TLV_COCTET )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asSMPP_TLV_OCTET )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asSMPP_TLV_VARIABLE )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asDELIVERYSTATUS_SCHEDULED )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asDELIVERYSTATUS_ENROUTE )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asDELIVERYSTATUS_DELIVERED )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asDELIVERYSTATUS_EXPIRED )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asDELIVERYSTATUS_DELETED )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asDELIVERYSTATUS_UNDELIVERABLE )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asDELIVERYSTATUS_ACCEPTED )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asDELIVERYSTATUS_UNKNOWN )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asDELIVERYSTATUS_REJECTED )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asDELIVERYSTATUS_SKIPPED )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asDELIVERYSTATUS_SUBMITTED )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asWAPPUSH_SERVICE_INDICATION )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asWAPPUSH_SERVICE_LOAD )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asWAPPUSHSIGNAL_NONE )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asWAPPUSHSIGNAL_LOW )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asWAPPUSHSIGNAL_MEDIUM )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asWAPPUSHSIGNAL_HIGH )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asWAPPUSHSIGNAL_DELETE )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asWAPPUSH_ACTION_EXECUTE_LOW )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asWAPPUSH_ACTION_EXECUTE_HIGH )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asWAPPUSH_ACTION_CACHE )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asPICTURE_MESSAGE )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asPICTURE_CALLERGROUP )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asPICTURE_OPERATORLOGO )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asPICTURE_OPERATORLOGO_RESTORE )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asDEVICESETTINGS_DEFAULT )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asDEVICESETTINGS_8N1 )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asDEVICESETTINGS_7E1 )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asSMPPCHARSET_DEFAULT )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asSMPPCHARSET_GSM )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asSMPPCHARSET_ASCII )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asSMPPCHARSET_LATIN )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asSMPPCHARSET_JIS )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asSMPPCHARSET_CYRILLIC )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asSMPPCHARSET_HEBREW )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asSMPPCHARSET_JAPANESE )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asSMPPCHARSET_GREEK )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asSTORAGE_ALL )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asSTORAGE_SIM )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asSTORAGE_DEVICE )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asSTORAGE_COMBINED )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asSTORAGE_REPORTS )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asDEVICEFLOWCONTROL_DEFAULT )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asDEVICEFLOWCONTROL_ENABLE )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asDEVICEFLOWCONTROL_DISABLE )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMMS_CLASS_ADVERTISEMENT )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMMS_CLASS_INFORMATIONAL )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMMS_CLASS_AUTO )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMMS_CLASS_PERSONAL )( 
            ISmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        END_INTERFACE
    } ISmsConstantsVtbl;

    interface ISmsConstants
    {
        CONST_VTBL struct ISmsConstantsVtbl __RPC_FAR *lpVtbl;
    };

    

#ifdef COBJMACROS


#define ISmsConstants_QueryInterface(This,riid,ppvObject)	\
    (This)->lpVtbl -> QueryInterface(This,riid,ppvObject)

#define ISmsConstants_AddRef(This)	\
    (This)->lpVtbl -> AddRef(This)

#define ISmsConstants_Release(This)	\
    (This)->lpVtbl -> Release(This)


#define ISmsConstants_GetTypeInfoCount(This,pctinfo)	\
    (This)->lpVtbl -> GetTypeInfoCount(This,pctinfo)

#define ISmsConstants_GetTypeInfo(This,iTInfo,lcid,ppTInfo)	\
    (This)->lpVtbl -> GetTypeInfo(This,iTInfo,lcid,ppTInfo)

#define ISmsConstants_GetIDsOfNames(This,riid,rgszNames,cNames,lcid,rgDispId)	\
    (This)->lpVtbl -> GetIDsOfNames(This,riid,rgszNames,cNames,lcid,rgDispId)

#define ISmsConstants_Invoke(This,dispIdMember,riid,lcid,wFlags,pDispParams,pVarResult,pExcepInfo,puArgErr)	\
    (This)->lpVtbl -> Invoke(This,dispIdMember,riid,lcid,wFlags,pDispParams,pVarResult,pExcepInfo,puArgErr)


#define ISmsConstants_get_asMESSAGEFORMAT_TEXT(This,pVal)	\
    (This)->lpVtbl -> get_asMESSAGEFORMAT_TEXT(This,pVal)

#define ISmsConstants_get_asMESSAGEFORMAT_TEXT_FLASH(This,pVal)	\
    (This)->lpVtbl -> get_asMESSAGEFORMAT_TEXT_FLASH(This,pVal)

#define ISmsConstants_get_asMESSAGEFORMAT_TEXT_MULTIPART(This,pVal)	\
    (This)->lpVtbl -> get_asMESSAGEFORMAT_TEXT_MULTIPART(This,pVal)

#define ISmsConstants_get_asMESSAGEFORMAT_TEXT_MULTIPART_FLASH(This,pVal)	\
    (This)->lpVtbl -> get_asMESSAGEFORMAT_TEXT_MULTIPART_FLASH(This,pVal)

#define ISmsConstants_get_asMESSAGEFORMAT_DATA(This,pVal)	\
    (This)->lpVtbl -> get_asMESSAGEFORMAT_DATA(This,pVal)

#define ISmsConstants_get_asMESSAGEFORMAT_DATA_UDH(This,pVal)	\
    (This)->lpVtbl -> get_asMESSAGEFORMAT_DATA_UDH(This,pVal)

#define ISmsConstants_get_asMESSAGEFORMAT_UNICODE(This,pVal)	\
    (This)->lpVtbl -> get_asMESSAGEFORMAT_UNICODE(This,pVal)

#define ISmsConstants_get_asMESSAGEFORMAT_UNICODE_FLASH(This,pVal)	\
    (This)->lpVtbl -> get_asMESSAGEFORMAT_UNICODE_FLASH(This,pVal)

#define ISmsConstants_get_asMESSAGEFORMAT_UNICODE_MULTIPART(This,pVal)	\
    (This)->lpVtbl -> get_asMESSAGEFORMAT_UNICODE_MULTIPART(This,pVal)

#define ISmsConstants_get_asMESSAGEFORMAT_UNICODE_MULTIPART_FLASH(This,pVal)	\
    (This)->lpVtbl -> get_asMESSAGEFORMAT_UNICODE_MULTIPART_FLASH(This,pVal)

#define ISmsConstants_get_asMESSAGEFORMAT_REPORT(This,pVal)	\
    (This)->lpVtbl -> get_asMESSAGEFORMAT_REPORT(This,pVal)

#define ISmsConstants_get_asMESSAGEFORMAT_NOTIFICATION_VOICEMAIL(This,pVal)	\
    (This)->lpVtbl -> get_asMESSAGEFORMAT_NOTIFICATION_VOICEMAIL(This,pVal)

#define ISmsConstants_get_asMESSAGEFORMAT_NOTIFICATION_FAX(This,pVal)	\
    (This)->lpVtbl -> get_asMESSAGEFORMAT_NOTIFICATION_FAX(This,pVal)

#define ISmsConstants_get_asMESSAGEFORMAT_NOTIFICATION_EMAIL(This,pVal)	\
    (This)->lpVtbl -> get_asMESSAGEFORMAT_NOTIFICATION_EMAIL(This,pVal)

#define ISmsConstants_get_asMESSAGEFORMAT_NOTIFICATION_MMS(This,pVal)	\
    (This)->lpVtbl -> get_asMESSAGEFORMAT_NOTIFICATION_MMS(This,pVal)

#define ISmsConstants_get_asSMPPMODE_TRANSCEIVER(This,pVal)	\
    (This)->lpVtbl -> get_asSMPPMODE_TRANSCEIVER(This,pVal)

#define ISmsConstants_get_asSMPPMODE_TRANSMITTER(This,pVal)	\
    (This)->lpVtbl -> get_asSMPPMODE_TRANSMITTER(This,pVal)

#define ISmsConstants_get_asSMPPMODE_RECEIVER(This,pVal)	\
    (This)->lpVtbl -> get_asSMPPMODE_RECEIVER(This,pVal)

#define ISmsConstants_get_asPROVIDERTYPE_UCP(This,pVal)	\
    (This)->lpVtbl -> get_asPROVIDERTYPE_UCP(This,pVal)

#define ISmsConstants_get_asPROVIDERTYPE_TAP_DEFAULT(This,pVal)	\
    (This)->lpVtbl -> get_asPROVIDERTYPE_TAP_DEFAULT(This,pVal)

#define ISmsConstants_get_asPROVIDERTYPE_TAP_NOLF(This,pVal)	\
    (This)->lpVtbl -> get_asPROVIDERTYPE_TAP_NOLF(This,pVal)

#define ISmsConstants_get_asPROVIDERTYPE_TAP_NOEOT(This,pVal)	\
    (This)->lpVtbl -> get_asPROVIDERTYPE_TAP_NOEOT(This,pVal)

#define ISmsConstants_get_asDIALMODE_TONE(This,pVal)	\
    (This)->lpVtbl -> get_asDIALMODE_TONE(This,pVal)

#define ISmsConstants_get_asDIALMODE_PULSE(This,pVal)	\
    (This)->lpVtbl -> get_asDIALMODE_PULSE(This,pVal)

#define ISmsConstants_get_asSMPPVERSION_33(This,pVal)	\
    (This)->lpVtbl -> get_asSMPPVERSION_33(This,pVal)

#define ISmsConstants_get_asSMPPVERSION_34(This,pVal)	\
    (This)->lpVtbl -> get_asSMPPVERSION_34(This,pVal)

#define ISmsConstants_get_asSMPPVERSION_50(This,pVal)	\
    (This)->lpVtbl -> get_asSMPPVERSION_50(This,pVal)

#define ISmsConstants_get_asSMPP_TLV_1BYTE(This,pVal)	\
    (This)->lpVtbl -> get_asSMPP_TLV_1BYTE(This,pVal)

#define ISmsConstants_get_asSMPP_TLV_2BYTE(This,pVal)	\
    (This)->lpVtbl -> get_asSMPP_TLV_2BYTE(This,pVal)

#define ISmsConstants_get_asSMPP_TLV_4BYTE(This,pVal)	\
    (This)->lpVtbl -> get_asSMPP_TLV_4BYTE(This,pVal)

#define ISmsConstants_get_asSMPP_TLV_COCTET(This,pVal)	\
    (This)->lpVtbl -> get_asSMPP_TLV_COCTET(This,pVal)

#define ISmsConstants_get_asSMPP_TLV_OCTET(This,pVal)	\
    (This)->lpVtbl -> get_asSMPP_TLV_OCTET(This,pVal)

#define ISmsConstants_get_asSMPP_TLV_VARIABLE(This,pVal)	\
    (This)->lpVtbl -> get_asSMPP_TLV_VARIABLE(This,pVal)

#define ISmsConstants_get_asDELIVERYSTATUS_SCHEDULED(This,pVal)	\
    (This)->lpVtbl -> get_asDELIVERYSTATUS_SCHEDULED(This,pVal)

#define ISmsConstants_get_asDELIVERYSTATUS_ENROUTE(This,pVal)	\
    (This)->lpVtbl -> get_asDELIVERYSTATUS_ENROUTE(This,pVal)

#define ISmsConstants_get_asDELIVERYSTATUS_DELIVERED(This,pVal)	\
    (This)->lpVtbl -> get_asDELIVERYSTATUS_DELIVERED(This,pVal)

#define ISmsConstants_get_asDELIVERYSTATUS_EXPIRED(This,pVal)	\
    (This)->lpVtbl -> get_asDELIVERYSTATUS_EXPIRED(This,pVal)

#define ISmsConstants_get_asDELIVERYSTATUS_DELETED(This,pVal)	\
    (This)->lpVtbl -> get_asDELIVERYSTATUS_DELETED(This,pVal)

#define ISmsConstants_get_asDELIVERYSTATUS_UNDELIVERABLE(This,pVal)	\
    (This)->lpVtbl -> get_asDELIVERYSTATUS_UNDELIVERABLE(This,pVal)

#define ISmsConstants_get_asDELIVERYSTATUS_ACCEPTED(This,pVal)	\
    (This)->lpVtbl -> get_asDELIVERYSTATUS_ACCEPTED(This,pVal)

#define ISmsConstants_get_asDELIVERYSTATUS_UNKNOWN(This,pVal)	\
    (This)->lpVtbl -> get_asDELIVERYSTATUS_UNKNOWN(This,pVal)

#define ISmsConstants_get_asDELIVERYSTATUS_REJECTED(This,pVal)	\
    (This)->lpVtbl -> get_asDELIVERYSTATUS_REJECTED(This,pVal)

#define ISmsConstants_get_asDELIVERYSTATUS_SKIPPED(This,pVal)	\
    (This)->lpVtbl -> get_asDELIVERYSTATUS_SKIPPED(This,pVal)

#define ISmsConstants_get_asDELIVERYSTATUS_SUBMITTED(This,pVal)	\
    (This)->lpVtbl -> get_asDELIVERYSTATUS_SUBMITTED(This,pVal)

#define ISmsConstants_get_asWAPPUSH_SERVICE_INDICATION(This,pVal)	\
    (This)->lpVtbl -> get_asWAPPUSH_SERVICE_INDICATION(This,pVal)

#define ISmsConstants_get_asWAPPUSH_SERVICE_LOAD(This,pVal)	\
    (This)->lpVtbl -> get_asWAPPUSH_SERVICE_LOAD(This,pVal)

#define ISmsConstants_get_asWAPPUSHSIGNAL_NONE(This,pVal)	\
    (This)->lpVtbl -> get_asWAPPUSHSIGNAL_NONE(This,pVal)

#define ISmsConstants_get_asWAPPUSHSIGNAL_LOW(This,pVal)	\
    (This)->lpVtbl -> get_asWAPPUSHSIGNAL_LOW(This,pVal)

#define ISmsConstants_get_asWAPPUSHSIGNAL_MEDIUM(This,pVal)	\
    (This)->lpVtbl -> get_asWAPPUSHSIGNAL_MEDIUM(This,pVal)

#define ISmsConstants_get_asWAPPUSHSIGNAL_HIGH(This,pVal)	\
    (This)->lpVtbl -> get_asWAPPUSHSIGNAL_HIGH(This,pVal)

#define ISmsConstants_get_asWAPPUSHSIGNAL_DELETE(This,pVal)	\
    (This)->lpVtbl -> get_asWAPPUSHSIGNAL_DELETE(This,pVal)

#define ISmsConstants_get_asWAPPUSH_ACTION_EXECUTE_LOW(This,pVal)	\
    (This)->lpVtbl -> get_asWAPPUSH_ACTION_EXECUTE_LOW(This,pVal)

#define ISmsConstants_get_asWAPPUSH_ACTION_EXECUTE_HIGH(This,pVal)	\
    (This)->lpVtbl -> get_asWAPPUSH_ACTION_EXECUTE_HIGH(This,pVal)

#define ISmsConstants_get_asWAPPUSH_ACTION_CACHE(This,pVal)	\
    (This)->lpVtbl -> get_asWAPPUSH_ACTION_CACHE(This,pVal)

#define ISmsConstants_get_asPICTURE_MESSAGE(This,pVal)	\
    (This)->lpVtbl -> get_asPICTURE_MESSAGE(This,pVal)

#define ISmsConstants_get_asPICTURE_CALLERGROUP(This,pVal)	\
    (This)->lpVtbl -> get_asPICTURE_CALLERGROUP(This,pVal)

#define ISmsConstants_get_asPICTURE_OPERATORLOGO(This,pVal)	\
    (This)->lpVtbl -> get_asPICTURE_OPERATORLOGO(This,pVal)

#define ISmsConstants_get_asPICTURE_OPERATORLOGO_RESTORE(This,pVal)	\
    (This)->lpVtbl -> get_asPICTURE_OPERATORLOGO_RESTORE(This,pVal)

#define ISmsConstants_get_asDEVICESETTINGS_DEFAULT(This,pVal)	\
    (This)->lpVtbl -> get_asDEVICESETTINGS_DEFAULT(This,pVal)

#define ISmsConstants_get_asDEVICESETTINGS_8N1(This,pVal)	\
    (This)->lpVtbl -> get_asDEVICESETTINGS_8N1(This,pVal)

#define ISmsConstants_get_asDEVICESETTINGS_7E1(This,pVal)	\
    (This)->lpVtbl -> get_asDEVICESETTINGS_7E1(This,pVal)

#define ISmsConstants_get_asSMPPCHARSET_DEFAULT(This,pVal)	\
    (This)->lpVtbl -> get_asSMPPCHARSET_DEFAULT(This,pVal)

#define ISmsConstants_get_asSMPPCHARSET_GSM(This,pVal)	\
    (This)->lpVtbl -> get_asSMPPCHARSET_GSM(This,pVal)

#define ISmsConstants_get_asSMPPCHARSET_ASCII(This,pVal)	\
    (This)->lpVtbl -> get_asSMPPCHARSET_ASCII(This,pVal)

#define ISmsConstants_get_asSMPPCHARSET_LATIN(This,pVal)	\
    (This)->lpVtbl -> get_asSMPPCHARSET_LATIN(This,pVal)

#define ISmsConstants_get_asSMPPCHARSET_JIS(This,pVal)	\
    (This)->lpVtbl -> get_asSMPPCHARSET_JIS(This,pVal)

#define ISmsConstants_get_asSMPPCHARSET_CYRILLIC(This,pVal)	\
    (This)->lpVtbl -> get_asSMPPCHARSET_CYRILLIC(This,pVal)

#define ISmsConstants_get_asSMPPCHARSET_HEBREW(This,pVal)	\
    (This)->lpVtbl -> get_asSMPPCHARSET_HEBREW(This,pVal)

#define ISmsConstants_get_asSMPPCHARSET_JAPANESE(This,pVal)	\
    (This)->lpVtbl -> get_asSMPPCHARSET_JAPANESE(This,pVal)

#define ISmsConstants_get_asSMPPCHARSET_GREEK(This,pVal)	\
    (This)->lpVtbl -> get_asSMPPCHARSET_GREEK(This,pVal)

#define ISmsConstants_get_asSTORAGE_ALL(This,pVal)	\
    (This)->lpVtbl -> get_asSTORAGE_ALL(This,pVal)

#define ISmsConstants_get_asSTORAGE_SIM(This,pVal)	\
    (This)->lpVtbl -> get_asSTORAGE_SIM(This,pVal)

#define ISmsConstants_get_asSTORAGE_DEVICE(This,pVal)	\
    (This)->lpVtbl -> get_asSTORAGE_DEVICE(This,pVal)

#define ISmsConstants_get_asSTORAGE_COMBINED(This,pVal)	\
    (This)->lpVtbl -> get_asSTORAGE_COMBINED(This,pVal)

#define ISmsConstants_get_asSTORAGE_REPORTS(This,pVal)	\
    (This)->lpVtbl -> get_asSTORAGE_REPORTS(This,pVal)

#define ISmsConstants_get_asDEVICEFLOWCONTROL_DEFAULT(This,pVal)	\
    (This)->lpVtbl -> get_asDEVICEFLOWCONTROL_DEFAULT(This,pVal)

#define ISmsConstants_get_asDEVICEFLOWCONTROL_ENABLE(This,pVal)	\
    (This)->lpVtbl -> get_asDEVICEFLOWCONTROL_ENABLE(This,pVal)

#define ISmsConstants_get_asDEVICEFLOWCONTROL_DISABLE(This,pVal)	\
    (This)->lpVtbl -> get_asDEVICEFLOWCONTROL_DISABLE(This,pVal)

#define ISmsConstants_get_asMMS_CLASS_ADVERTISEMENT(This,pVal)	\
    (This)->lpVtbl -> get_asMMS_CLASS_ADVERTISEMENT(This,pVal)

#define ISmsConstants_get_asMMS_CLASS_INFORMATIONAL(This,pVal)	\
    (This)->lpVtbl -> get_asMMS_CLASS_INFORMATIONAL(This,pVal)

#define ISmsConstants_get_asMMS_CLASS_AUTO(This,pVal)	\
    (This)->lpVtbl -> get_asMMS_CLASS_AUTO(This,pVal)

#define ISmsConstants_get_asMMS_CLASS_PERSONAL(This,pVal)	\
    (This)->lpVtbl -> get_asMMS_CLASS_PERSONAL(This,pVal)

#endif /* COBJMACROS */


#endif 	/* C style interface */



/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asMESSAGEFORMAT_TEXT_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asMESSAGEFORMAT_TEXT_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asMESSAGEFORMAT_TEXT_FLASH_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asMESSAGEFORMAT_TEXT_FLASH_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asMESSAGEFORMAT_TEXT_MULTIPART_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asMESSAGEFORMAT_TEXT_MULTIPART_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asMESSAGEFORMAT_TEXT_MULTIPART_FLASH_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asMESSAGEFORMAT_TEXT_MULTIPART_FLASH_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asMESSAGEFORMAT_DATA_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asMESSAGEFORMAT_DATA_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asMESSAGEFORMAT_DATA_UDH_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asMESSAGEFORMAT_DATA_UDH_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asMESSAGEFORMAT_UNICODE_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asMESSAGEFORMAT_UNICODE_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asMESSAGEFORMAT_UNICODE_FLASH_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asMESSAGEFORMAT_UNICODE_FLASH_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asMESSAGEFORMAT_UNICODE_MULTIPART_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asMESSAGEFORMAT_UNICODE_MULTIPART_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asMESSAGEFORMAT_UNICODE_MULTIPART_FLASH_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asMESSAGEFORMAT_UNICODE_MULTIPART_FLASH_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asMESSAGEFORMAT_REPORT_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asMESSAGEFORMAT_REPORT_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asMESSAGEFORMAT_NOTIFICATION_VOICEMAIL_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asMESSAGEFORMAT_NOTIFICATION_VOICEMAIL_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asMESSAGEFORMAT_NOTIFICATION_FAX_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asMESSAGEFORMAT_NOTIFICATION_FAX_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asMESSAGEFORMAT_NOTIFICATION_EMAIL_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asMESSAGEFORMAT_NOTIFICATION_EMAIL_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asMESSAGEFORMAT_NOTIFICATION_MMS_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asMESSAGEFORMAT_NOTIFICATION_MMS_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asSMPPMODE_TRANSCEIVER_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asSMPPMODE_TRANSCEIVER_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asSMPPMODE_TRANSMITTER_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asSMPPMODE_TRANSMITTER_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asSMPPMODE_RECEIVER_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asSMPPMODE_RECEIVER_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asPROVIDERTYPE_UCP_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asPROVIDERTYPE_UCP_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asPROVIDERTYPE_TAP_DEFAULT_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asPROVIDERTYPE_TAP_DEFAULT_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asPROVIDERTYPE_TAP_NOLF_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asPROVIDERTYPE_TAP_NOLF_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asPROVIDERTYPE_TAP_NOEOT_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asPROVIDERTYPE_TAP_NOEOT_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asDIALMODE_TONE_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asDIALMODE_TONE_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asDIALMODE_PULSE_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asDIALMODE_PULSE_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asSMPPVERSION_33_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asSMPPVERSION_33_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asSMPPVERSION_34_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asSMPPVERSION_34_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asSMPPVERSION_50_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asSMPPVERSION_50_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asSMPP_TLV_1BYTE_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asSMPP_TLV_1BYTE_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asSMPP_TLV_2BYTE_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asSMPP_TLV_2BYTE_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asSMPP_TLV_4BYTE_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asSMPP_TLV_4BYTE_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asSMPP_TLV_COCTET_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asSMPP_TLV_COCTET_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asSMPP_TLV_OCTET_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asSMPP_TLV_OCTET_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asSMPP_TLV_VARIABLE_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asSMPP_TLV_VARIABLE_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asDELIVERYSTATUS_SCHEDULED_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asDELIVERYSTATUS_SCHEDULED_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asDELIVERYSTATUS_ENROUTE_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asDELIVERYSTATUS_ENROUTE_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asDELIVERYSTATUS_DELIVERED_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asDELIVERYSTATUS_DELIVERED_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asDELIVERYSTATUS_EXPIRED_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asDELIVERYSTATUS_EXPIRED_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asDELIVERYSTATUS_DELETED_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asDELIVERYSTATUS_DELETED_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asDELIVERYSTATUS_UNDELIVERABLE_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asDELIVERYSTATUS_UNDELIVERABLE_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asDELIVERYSTATUS_ACCEPTED_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asDELIVERYSTATUS_ACCEPTED_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asDELIVERYSTATUS_UNKNOWN_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asDELIVERYSTATUS_UNKNOWN_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asDELIVERYSTATUS_REJECTED_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asDELIVERYSTATUS_REJECTED_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asDELIVERYSTATUS_SKIPPED_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asDELIVERYSTATUS_SKIPPED_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asDELIVERYSTATUS_SUBMITTED_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asDELIVERYSTATUS_SUBMITTED_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asWAPPUSH_SERVICE_INDICATION_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asWAPPUSH_SERVICE_INDICATION_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asWAPPUSH_SERVICE_LOAD_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asWAPPUSH_SERVICE_LOAD_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asWAPPUSHSIGNAL_NONE_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asWAPPUSHSIGNAL_NONE_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asWAPPUSHSIGNAL_LOW_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asWAPPUSHSIGNAL_LOW_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asWAPPUSHSIGNAL_MEDIUM_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asWAPPUSHSIGNAL_MEDIUM_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asWAPPUSHSIGNAL_HIGH_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asWAPPUSHSIGNAL_HIGH_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asWAPPUSHSIGNAL_DELETE_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asWAPPUSHSIGNAL_DELETE_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asWAPPUSH_ACTION_EXECUTE_LOW_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asWAPPUSH_ACTION_EXECUTE_LOW_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asWAPPUSH_ACTION_EXECUTE_HIGH_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asWAPPUSH_ACTION_EXECUTE_HIGH_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asWAPPUSH_ACTION_CACHE_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asWAPPUSH_ACTION_CACHE_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asPICTURE_MESSAGE_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asPICTURE_MESSAGE_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asPICTURE_CALLERGROUP_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asPICTURE_CALLERGROUP_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asPICTURE_OPERATORLOGO_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asPICTURE_OPERATORLOGO_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asPICTURE_OPERATORLOGO_RESTORE_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asPICTURE_OPERATORLOGO_RESTORE_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asDEVICESETTINGS_DEFAULT_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asDEVICESETTINGS_DEFAULT_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asDEVICESETTINGS_8N1_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asDEVICESETTINGS_8N1_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asDEVICESETTINGS_7E1_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asDEVICESETTINGS_7E1_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asSMPPCHARSET_DEFAULT_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asSMPPCHARSET_DEFAULT_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asSMPPCHARSET_GSM_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asSMPPCHARSET_GSM_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asSMPPCHARSET_ASCII_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asSMPPCHARSET_ASCII_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asSMPPCHARSET_LATIN_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asSMPPCHARSET_LATIN_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asSMPPCHARSET_JIS_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asSMPPCHARSET_JIS_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asSMPPCHARSET_CYRILLIC_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asSMPPCHARSET_CYRILLIC_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asSMPPCHARSET_HEBREW_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asSMPPCHARSET_HEBREW_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asSMPPCHARSET_JAPANESE_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asSMPPCHARSET_JAPANESE_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asSMPPCHARSET_GREEK_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asSMPPCHARSET_GREEK_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asSTORAGE_ALL_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asSTORAGE_ALL_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asSTORAGE_SIM_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asSTORAGE_SIM_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asSTORAGE_DEVICE_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asSTORAGE_DEVICE_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asSTORAGE_COMBINED_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asSTORAGE_COMBINED_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asSTORAGE_REPORTS_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asSTORAGE_REPORTS_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asDEVICEFLOWCONTROL_DEFAULT_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asDEVICEFLOWCONTROL_DEFAULT_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asDEVICEFLOWCONTROL_ENABLE_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asDEVICEFLOWCONTROL_ENABLE_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asDEVICEFLOWCONTROL_DISABLE_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asDEVICEFLOWCONTROL_DISABLE_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asMMS_CLASS_ADVERTISEMENT_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asMMS_CLASS_ADVERTISEMENT_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asMMS_CLASS_INFORMATIONAL_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asMMS_CLASS_INFORMATIONAL_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asMMS_CLASS_AUTO_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asMMS_CLASS_AUTO_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsConstants_get_asMMS_CLASS_PERSONAL_Proxy( 
    ISmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsConstants_get_asMMS_CLASS_PERSONAL_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);



#endif 	/* __ISmsConstants_INTERFACE_DEFINED__ */


#ifndef __ISmsProtocolHttp_INTERFACE_DEFINED__
#define __ISmsProtocolHttp_INTERFACE_DEFINED__

/* interface ISmsProtocolHttp */
/* [unique][helpstring][dual][uuid][object] */ 


EXTERN_C const IID IID_ISmsProtocolHttp;

#if defined(__cplusplus) && !defined(CINTERFACE)
    
    MIDL_INTERFACE("FE747A06-B435-4E13-89B9-A4EFFB6AED75")
    ISmsProtocolHttp : public IDispatch
    {
    public:
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_LastError( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Version( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Build( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ExpirationDate( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_Reserved( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_LogFile( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_LogFile( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ActivityFile( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_ActivityFile( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_DistributionID( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_DistributionKey( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE Clear( void) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE GetErrorDescription( 
            LONG newVal,
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE Activate( 
            BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ProviderHost( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_ProviderHost( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ProviderPort( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_ProviderPort( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ProviderWebAccount( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_ProviderWebAccount( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ProviderWebPassword( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_ProviderWebPassword( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ProviderUseSSL( 
            /* [retval][out] */ BOOL __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_ProviderUseSSL( 
            /* [in] */ BOOL newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ProviderCharset( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_ProviderCharset( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ProviderResponse( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ProviderSuccessResponse( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_ProviderSuccessResponse( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ProviderErrorResponse( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_ProviderErrorResponse( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ProxyServer( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_ProxyServer( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ProxyPort( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_ProxyPort( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ProxyAccount( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_ProxyAccount( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ProxyPassword( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_ProxyPassword( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_URLText( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_URLText( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_URLBinary( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_URLBinary( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_URLUnicode( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_URLUnicode( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_AdvancedSettings( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_AdvancedSettings( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE Send( 
            VARIANT __RPC_FAR *pVariant) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE ProviderLoadConfig( 
            BSTR bstrFileName) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE ProviderSaveConfig( 
            BSTR bstrFileName) = 0;
        
    };
    
#else 	/* C style interface */

    typedef struct ISmsProtocolHttpVtbl
    {
        BEGIN_INTERFACE
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *QueryInterface )( 
            ISmsProtocolHttp __RPC_FAR * This,
            /* [in] */ REFIID riid,
            /* [iid_is][out] */ void __RPC_FAR *__RPC_FAR *ppvObject);
        
        ULONG ( STDMETHODCALLTYPE __RPC_FAR *AddRef )( 
            ISmsProtocolHttp __RPC_FAR * This);
        
        ULONG ( STDMETHODCALLTYPE __RPC_FAR *Release )( 
            ISmsProtocolHttp __RPC_FAR * This);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetTypeInfoCount )( 
            ISmsProtocolHttp __RPC_FAR * This,
            /* [out] */ UINT __RPC_FAR *pctinfo);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetTypeInfo )( 
            ISmsProtocolHttp __RPC_FAR * This,
            /* [in] */ UINT iTInfo,
            /* [in] */ LCID lcid,
            /* [out] */ ITypeInfo __RPC_FAR *__RPC_FAR *ppTInfo);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetIDsOfNames )( 
            ISmsProtocolHttp __RPC_FAR * This,
            /* [in] */ REFIID riid,
            /* [size_is][in] */ LPOLESTR __RPC_FAR *rgszNames,
            /* [in] */ UINT cNames,
            /* [in] */ LCID lcid,
            /* [size_is][out] */ DISPID __RPC_FAR *rgDispId);
        
        /* [local] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Invoke )( 
            ISmsProtocolHttp __RPC_FAR * This,
            /* [in] */ DISPID dispIdMember,
            /* [in] */ REFIID riid,
            /* [in] */ LCID lcid,
            /* [in] */ WORD wFlags,
            /* [out][in] */ DISPPARAMS __RPC_FAR *pDispParams,
            /* [out] */ VARIANT __RPC_FAR *pVarResult,
            /* [out] */ EXCEPINFO __RPC_FAR *pExcepInfo,
            /* [out] */ UINT __RPC_FAR *puArgErr);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_LastError )( 
            ISmsProtocolHttp __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Version )( 
            ISmsProtocolHttp __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Build )( 
            ISmsProtocolHttp __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ExpirationDate )( 
            ISmsProtocolHttp __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_Reserved )( 
            ISmsProtocolHttp __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_LogFile )( 
            ISmsProtocolHttp __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_LogFile )( 
            ISmsProtocolHttp __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ActivityFile )( 
            ISmsProtocolHttp __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_ActivityFile )( 
            ISmsProtocolHttp __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_DistributionID )( 
            ISmsProtocolHttp __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_DistributionKey )( 
            ISmsProtocolHttp __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Clear )( 
            ISmsProtocolHttp __RPC_FAR * This);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetErrorDescription )( 
            ISmsProtocolHttp __RPC_FAR * This,
            LONG newVal,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Activate )( 
            ISmsProtocolHttp __RPC_FAR * This,
            BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ProviderHost )( 
            ISmsProtocolHttp __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_ProviderHost )( 
            ISmsProtocolHttp __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ProviderPort )( 
            ISmsProtocolHttp __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_ProviderPort )( 
            ISmsProtocolHttp __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ProviderWebAccount )( 
            ISmsProtocolHttp __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_ProviderWebAccount )( 
            ISmsProtocolHttp __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ProviderWebPassword )( 
            ISmsProtocolHttp __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_ProviderWebPassword )( 
            ISmsProtocolHttp __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ProviderUseSSL )( 
            ISmsProtocolHttp __RPC_FAR * This,
            /* [retval][out] */ BOOL __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_ProviderUseSSL )( 
            ISmsProtocolHttp __RPC_FAR * This,
            /* [in] */ BOOL newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ProviderCharset )( 
            ISmsProtocolHttp __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_ProviderCharset )( 
            ISmsProtocolHttp __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ProviderResponse )( 
            ISmsProtocolHttp __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ProviderSuccessResponse )( 
            ISmsProtocolHttp __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_ProviderSuccessResponse )( 
            ISmsProtocolHttp __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ProviderErrorResponse )( 
            ISmsProtocolHttp __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_ProviderErrorResponse )( 
            ISmsProtocolHttp __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ProxyServer )( 
            ISmsProtocolHttp __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_ProxyServer )( 
            ISmsProtocolHttp __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ProxyPort )( 
            ISmsProtocolHttp __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_ProxyPort )( 
            ISmsProtocolHttp __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ProxyAccount )( 
            ISmsProtocolHttp __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_ProxyAccount )( 
            ISmsProtocolHttp __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ProxyPassword )( 
            ISmsProtocolHttp __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_ProxyPassword )( 
            ISmsProtocolHttp __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_URLText )( 
            ISmsProtocolHttp __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_URLText )( 
            ISmsProtocolHttp __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_URLBinary )( 
            ISmsProtocolHttp __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_URLBinary )( 
            ISmsProtocolHttp __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_URLUnicode )( 
            ISmsProtocolHttp __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_URLUnicode )( 
            ISmsProtocolHttp __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_AdvancedSettings )( 
            ISmsProtocolHttp __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_AdvancedSettings )( 
            ISmsProtocolHttp __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Send )( 
            ISmsProtocolHttp __RPC_FAR * This,
            VARIANT __RPC_FAR *pVariant);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *ProviderLoadConfig )( 
            ISmsProtocolHttp __RPC_FAR * This,
            BSTR bstrFileName);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *ProviderSaveConfig )( 
            ISmsProtocolHttp __RPC_FAR * This,
            BSTR bstrFileName);
        
        END_INTERFACE
    } ISmsProtocolHttpVtbl;

    interface ISmsProtocolHttp
    {
        CONST_VTBL struct ISmsProtocolHttpVtbl __RPC_FAR *lpVtbl;
    };

    

#ifdef COBJMACROS


#define ISmsProtocolHttp_QueryInterface(This,riid,ppvObject)	\
    (This)->lpVtbl -> QueryInterface(This,riid,ppvObject)

#define ISmsProtocolHttp_AddRef(This)	\
    (This)->lpVtbl -> AddRef(This)

#define ISmsProtocolHttp_Release(This)	\
    (This)->lpVtbl -> Release(This)


#define ISmsProtocolHttp_GetTypeInfoCount(This,pctinfo)	\
    (This)->lpVtbl -> GetTypeInfoCount(This,pctinfo)

#define ISmsProtocolHttp_GetTypeInfo(This,iTInfo,lcid,ppTInfo)	\
    (This)->lpVtbl -> GetTypeInfo(This,iTInfo,lcid,ppTInfo)

#define ISmsProtocolHttp_GetIDsOfNames(This,riid,rgszNames,cNames,lcid,rgDispId)	\
    (This)->lpVtbl -> GetIDsOfNames(This,riid,rgszNames,cNames,lcid,rgDispId)

#define ISmsProtocolHttp_Invoke(This,dispIdMember,riid,lcid,wFlags,pDispParams,pVarResult,pExcepInfo,puArgErr)	\
    (This)->lpVtbl -> Invoke(This,dispIdMember,riid,lcid,wFlags,pDispParams,pVarResult,pExcepInfo,puArgErr)


#define ISmsProtocolHttp_get_LastError(This,pVal)	\
    (This)->lpVtbl -> get_LastError(This,pVal)

#define ISmsProtocolHttp_get_Version(This,pVal)	\
    (This)->lpVtbl -> get_Version(This,pVal)

#define ISmsProtocolHttp_get_Build(This,pVal)	\
    (This)->lpVtbl -> get_Build(This,pVal)

#define ISmsProtocolHttp_get_ExpirationDate(This,pVal)	\
    (This)->lpVtbl -> get_ExpirationDate(This,pVal)

#define ISmsProtocolHttp_put_Reserved(This,newVal)	\
    (This)->lpVtbl -> put_Reserved(This,newVal)

#define ISmsProtocolHttp_get_LogFile(This,pVal)	\
    (This)->lpVtbl -> get_LogFile(This,pVal)

#define ISmsProtocolHttp_put_LogFile(This,newVal)	\
    (This)->lpVtbl -> put_LogFile(This,newVal)

#define ISmsProtocolHttp_get_ActivityFile(This,pVal)	\
    (This)->lpVtbl -> get_ActivityFile(This,pVal)

#define ISmsProtocolHttp_put_ActivityFile(This,newVal)	\
    (This)->lpVtbl -> put_ActivityFile(This,newVal)

#define ISmsProtocolHttp_put_DistributionID(This,newVal)	\
    (This)->lpVtbl -> put_DistributionID(This,newVal)

#define ISmsProtocolHttp_put_DistributionKey(This,newVal)	\
    (This)->lpVtbl -> put_DistributionKey(This,newVal)

#define ISmsProtocolHttp_Clear(This)	\
    (This)->lpVtbl -> Clear(This)

#define ISmsProtocolHttp_GetErrorDescription(This,newVal,pVal)	\
    (This)->lpVtbl -> GetErrorDescription(This,newVal,pVal)

#define ISmsProtocolHttp_Activate(This,newVal)	\
    (This)->lpVtbl -> Activate(This,newVal)

#define ISmsProtocolHttp_get_ProviderHost(This,pVal)	\
    (This)->lpVtbl -> get_ProviderHost(This,pVal)

#define ISmsProtocolHttp_put_ProviderHost(This,newVal)	\
    (This)->lpVtbl -> put_ProviderHost(This,newVal)

#define ISmsProtocolHttp_get_ProviderPort(This,pVal)	\
    (This)->lpVtbl -> get_ProviderPort(This,pVal)

#define ISmsProtocolHttp_put_ProviderPort(This,newVal)	\
    (This)->lpVtbl -> put_ProviderPort(This,newVal)

#define ISmsProtocolHttp_get_ProviderWebAccount(This,pVal)	\
    (This)->lpVtbl -> get_ProviderWebAccount(This,pVal)

#define ISmsProtocolHttp_put_ProviderWebAccount(This,newVal)	\
    (This)->lpVtbl -> put_ProviderWebAccount(This,newVal)

#define ISmsProtocolHttp_get_ProviderWebPassword(This,pVal)	\
    (This)->lpVtbl -> get_ProviderWebPassword(This,pVal)

#define ISmsProtocolHttp_put_ProviderWebPassword(This,newVal)	\
    (This)->lpVtbl -> put_ProviderWebPassword(This,newVal)

#define ISmsProtocolHttp_get_ProviderUseSSL(This,pVal)	\
    (This)->lpVtbl -> get_ProviderUseSSL(This,pVal)

#define ISmsProtocolHttp_put_ProviderUseSSL(This,newVal)	\
    (This)->lpVtbl -> put_ProviderUseSSL(This,newVal)

#define ISmsProtocolHttp_get_ProviderCharset(This,pVal)	\
    (This)->lpVtbl -> get_ProviderCharset(This,pVal)

#define ISmsProtocolHttp_put_ProviderCharset(This,newVal)	\
    (This)->lpVtbl -> put_ProviderCharset(This,newVal)

#define ISmsProtocolHttp_get_ProviderResponse(This,pVal)	\
    (This)->lpVtbl -> get_ProviderResponse(This,pVal)

#define ISmsProtocolHttp_get_ProviderSuccessResponse(This,pVal)	\
    (This)->lpVtbl -> get_ProviderSuccessResponse(This,pVal)

#define ISmsProtocolHttp_put_ProviderSuccessResponse(This,newVal)	\
    (This)->lpVtbl -> put_ProviderSuccessResponse(This,newVal)

#define ISmsProtocolHttp_get_ProviderErrorResponse(This,pVal)	\
    (This)->lpVtbl -> get_ProviderErrorResponse(This,pVal)

#define ISmsProtocolHttp_put_ProviderErrorResponse(This,newVal)	\
    (This)->lpVtbl -> put_ProviderErrorResponse(This,newVal)

#define ISmsProtocolHttp_get_ProxyServer(This,pVal)	\
    (This)->lpVtbl -> get_ProxyServer(This,pVal)

#define ISmsProtocolHttp_put_ProxyServer(This,newVal)	\
    (This)->lpVtbl -> put_ProxyServer(This,newVal)

#define ISmsProtocolHttp_get_ProxyPort(This,pVal)	\
    (This)->lpVtbl -> get_ProxyPort(This,pVal)

#define ISmsProtocolHttp_put_ProxyPort(This,newVal)	\
    (This)->lpVtbl -> put_ProxyPort(This,newVal)

#define ISmsProtocolHttp_get_ProxyAccount(This,pVal)	\
    (This)->lpVtbl -> get_ProxyAccount(This,pVal)

#define ISmsProtocolHttp_put_ProxyAccount(This,newVal)	\
    (This)->lpVtbl -> put_ProxyAccount(This,newVal)

#define ISmsProtocolHttp_get_ProxyPassword(This,pVal)	\
    (This)->lpVtbl -> get_ProxyPassword(This,pVal)

#define ISmsProtocolHttp_put_ProxyPassword(This,newVal)	\
    (This)->lpVtbl -> put_ProxyPassword(This,newVal)

#define ISmsProtocolHttp_get_URLText(This,pVal)	\
    (This)->lpVtbl -> get_URLText(This,pVal)

#define ISmsProtocolHttp_put_URLText(This,newVal)	\
    (This)->lpVtbl -> put_URLText(This,newVal)

#define ISmsProtocolHttp_get_URLBinary(This,pVal)	\
    (This)->lpVtbl -> get_URLBinary(This,pVal)

#define ISmsProtocolHttp_put_URLBinary(This,newVal)	\
    (This)->lpVtbl -> put_URLBinary(This,newVal)

#define ISmsProtocolHttp_get_URLUnicode(This,pVal)	\
    (This)->lpVtbl -> get_URLUnicode(This,pVal)

#define ISmsProtocolHttp_put_URLUnicode(This,newVal)	\
    (This)->lpVtbl -> put_URLUnicode(This,newVal)

#define ISmsProtocolHttp_get_AdvancedSettings(This,pVal)	\
    (This)->lpVtbl -> get_AdvancedSettings(This,pVal)

#define ISmsProtocolHttp_put_AdvancedSettings(This,newVal)	\
    (This)->lpVtbl -> put_AdvancedSettings(This,newVal)

#define ISmsProtocolHttp_Send(This,pVariant)	\
    (This)->lpVtbl -> Send(This,pVariant)

#define ISmsProtocolHttp_ProviderLoadConfig(This,bstrFileName)	\
    (This)->lpVtbl -> ProviderLoadConfig(This,bstrFileName)

#define ISmsProtocolHttp_ProviderSaveConfig(This,bstrFileName)	\
    (This)->lpVtbl -> ProviderSaveConfig(This,bstrFileName)

#endif /* COBJMACROS */


#endif 	/* C style interface */



/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolHttp_get_LastError_Proxy( 
    ISmsProtocolHttp __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolHttp_get_LastError_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolHttp_get_Version_Proxy( 
    ISmsProtocolHttp __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolHttp_get_Version_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolHttp_get_Build_Proxy( 
    ISmsProtocolHttp __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolHttp_get_Build_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolHttp_get_ExpirationDate_Proxy( 
    ISmsProtocolHttp __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolHttp_get_ExpirationDate_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolHttp_put_Reserved_Proxy( 
    ISmsProtocolHttp __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB ISmsProtocolHttp_put_Reserved_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolHttp_get_LogFile_Proxy( 
    ISmsProtocolHttp __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolHttp_get_LogFile_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolHttp_put_LogFile_Proxy( 
    ISmsProtocolHttp __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsProtocolHttp_put_LogFile_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolHttp_get_ActivityFile_Proxy( 
    ISmsProtocolHttp __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolHttp_get_ActivityFile_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolHttp_put_ActivityFile_Proxy( 
    ISmsProtocolHttp __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsProtocolHttp_put_ActivityFile_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolHttp_put_DistributionID_Proxy( 
    ISmsProtocolHttp __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsProtocolHttp_put_DistributionID_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolHttp_put_DistributionKey_Proxy( 
    ISmsProtocolHttp __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsProtocolHttp_put_DistributionKey_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsProtocolHttp_Clear_Proxy( 
    ISmsProtocolHttp __RPC_FAR * This);


void __RPC_STUB ISmsProtocolHttp_Clear_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsProtocolHttp_GetErrorDescription_Proxy( 
    ISmsProtocolHttp __RPC_FAR * This,
    LONG newVal,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolHttp_GetErrorDescription_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsProtocolHttp_Activate_Proxy( 
    ISmsProtocolHttp __RPC_FAR * This,
    BSTR newVal);


void __RPC_STUB ISmsProtocolHttp_Activate_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolHttp_get_ProviderHost_Proxy( 
    ISmsProtocolHttp __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolHttp_get_ProviderHost_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolHttp_put_ProviderHost_Proxy( 
    ISmsProtocolHttp __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsProtocolHttp_put_ProviderHost_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolHttp_get_ProviderPort_Proxy( 
    ISmsProtocolHttp __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolHttp_get_ProviderPort_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolHttp_put_ProviderPort_Proxy( 
    ISmsProtocolHttp __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB ISmsProtocolHttp_put_ProviderPort_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolHttp_get_ProviderWebAccount_Proxy( 
    ISmsProtocolHttp __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolHttp_get_ProviderWebAccount_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolHttp_put_ProviderWebAccount_Proxy( 
    ISmsProtocolHttp __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsProtocolHttp_put_ProviderWebAccount_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolHttp_get_ProviderWebPassword_Proxy( 
    ISmsProtocolHttp __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolHttp_get_ProviderWebPassword_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolHttp_put_ProviderWebPassword_Proxy( 
    ISmsProtocolHttp __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsProtocolHttp_put_ProviderWebPassword_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolHttp_get_ProviderUseSSL_Proxy( 
    ISmsProtocolHttp __RPC_FAR * This,
    /* [retval][out] */ BOOL __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolHttp_get_ProviderUseSSL_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolHttp_put_ProviderUseSSL_Proxy( 
    ISmsProtocolHttp __RPC_FAR * This,
    /* [in] */ BOOL newVal);


void __RPC_STUB ISmsProtocolHttp_put_ProviderUseSSL_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolHttp_get_ProviderCharset_Proxy( 
    ISmsProtocolHttp __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolHttp_get_ProviderCharset_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolHttp_put_ProviderCharset_Proxy( 
    ISmsProtocolHttp __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB ISmsProtocolHttp_put_ProviderCharset_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolHttp_get_ProviderResponse_Proxy( 
    ISmsProtocolHttp __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolHttp_get_ProviderResponse_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolHttp_get_ProviderSuccessResponse_Proxy( 
    ISmsProtocolHttp __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolHttp_get_ProviderSuccessResponse_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolHttp_put_ProviderSuccessResponse_Proxy( 
    ISmsProtocolHttp __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsProtocolHttp_put_ProviderSuccessResponse_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolHttp_get_ProviderErrorResponse_Proxy( 
    ISmsProtocolHttp __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolHttp_get_ProviderErrorResponse_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolHttp_put_ProviderErrorResponse_Proxy( 
    ISmsProtocolHttp __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsProtocolHttp_put_ProviderErrorResponse_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolHttp_get_ProxyServer_Proxy( 
    ISmsProtocolHttp __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolHttp_get_ProxyServer_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolHttp_put_ProxyServer_Proxy( 
    ISmsProtocolHttp __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsProtocolHttp_put_ProxyServer_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolHttp_get_ProxyPort_Proxy( 
    ISmsProtocolHttp __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolHttp_get_ProxyPort_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolHttp_put_ProxyPort_Proxy( 
    ISmsProtocolHttp __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB ISmsProtocolHttp_put_ProxyPort_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolHttp_get_ProxyAccount_Proxy( 
    ISmsProtocolHttp __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolHttp_get_ProxyAccount_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolHttp_put_ProxyAccount_Proxy( 
    ISmsProtocolHttp __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsProtocolHttp_put_ProxyAccount_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolHttp_get_ProxyPassword_Proxy( 
    ISmsProtocolHttp __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolHttp_get_ProxyPassword_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolHttp_put_ProxyPassword_Proxy( 
    ISmsProtocolHttp __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsProtocolHttp_put_ProxyPassword_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolHttp_get_URLText_Proxy( 
    ISmsProtocolHttp __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolHttp_get_URLText_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolHttp_put_URLText_Proxy( 
    ISmsProtocolHttp __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsProtocolHttp_put_URLText_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolHttp_get_URLBinary_Proxy( 
    ISmsProtocolHttp __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolHttp_get_URLBinary_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolHttp_put_URLBinary_Proxy( 
    ISmsProtocolHttp __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsProtocolHttp_put_URLBinary_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolHttp_get_URLUnicode_Proxy( 
    ISmsProtocolHttp __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolHttp_get_URLUnicode_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolHttp_put_URLUnicode_Proxy( 
    ISmsProtocolHttp __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsProtocolHttp_put_URLUnicode_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolHttp_get_AdvancedSettings_Proxy( 
    ISmsProtocolHttp __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolHttp_get_AdvancedSettings_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolHttp_put_AdvancedSettings_Proxy( 
    ISmsProtocolHttp __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsProtocolHttp_put_AdvancedSettings_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsProtocolHttp_Send_Proxy( 
    ISmsProtocolHttp __RPC_FAR * This,
    VARIANT __RPC_FAR *pVariant);


void __RPC_STUB ISmsProtocolHttp_Send_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsProtocolHttp_ProviderLoadConfig_Proxy( 
    ISmsProtocolHttp __RPC_FAR * This,
    BSTR bstrFileName);


void __RPC_STUB ISmsProtocolHttp_ProviderLoadConfig_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsProtocolHttp_ProviderSaveConfig_Proxy( 
    ISmsProtocolHttp __RPC_FAR * This,
    BSTR bstrFileName);


void __RPC_STUB ISmsProtocolHttp_ProviderSaveConfig_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);



#endif 	/* __ISmsProtocolHttp_INTERFACE_DEFINED__ */


#ifndef __ISmsProtocolDialup_INTERFACE_DEFINED__
#define __ISmsProtocolDialup_INTERFACE_DEFINED__

/* interface ISmsProtocolDialup */
/* [unique][helpstring][dual][uuid][object] */ 


EXTERN_C const IID IID_ISmsProtocolDialup;

#if defined(__cplusplus) && !defined(CINTERFACE)
    
    MIDL_INTERFACE("6981A9D3-9F5E-4AE0-B915-E582DE5769DC")
    ISmsProtocolDialup : public IDispatch
    {
    public:
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_LastError( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Version( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Build( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ExpirationDate( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_Reserved( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_LogFile( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_LogFile( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ActivityFile( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_ActivityFile( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_DistributionID( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_DistributionKey( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE Clear( void) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE GetErrorDescription( 
            LONG newVal,
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE Activate( 
            BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Device( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_Device( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_DeviceSpeed( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_DeviceSpeed( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_DeviceSettings( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_DeviceSettings( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_DeviceInitString( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_DeviceInitString( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_DeviceFlowControl( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_DeviceFlowControl( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_DialMode( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_DialMode( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ProviderDialString( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_ProviderDialString( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ProviderPassword( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_ProviderPassword( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ProviderType( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_ProviderType( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ProviderResponse( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_AdvancedSettings( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_AdvancedSettings( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE GetDeviceCount( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE GetDevice( 
            LONG lIndex,
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE Send( 
            VARIANT __RPC_FAR *pMessage) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE ProviderLoadConfig( 
            BSTR bstrFileName) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE ProviderSaveConfig( 
            BSTR bstrFileName) = 0;
        
    };
    
#else 	/* C style interface */

    typedef struct ISmsProtocolDialupVtbl
    {
        BEGIN_INTERFACE
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *QueryInterface )( 
            ISmsProtocolDialup __RPC_FAR * This,
            /* [in] */ REFIID riid,
            /* [iid_is][out] */ void __RPC_FAR *__RPC_FAR *ppvObject);
        
        ULONG ( STDMETHODCALLTYPE __RPC_FAR *AddRef )( 
            ISmsProtocolDialup __RPC_FAR * This);
        
        ULONG ( STDMETHODCALLTYPE __RPC_FAR *Release )( 
            ISmsProtocolDialup __RPC_FAR * This);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetTypeInfoCount )( 
            ISmsProtocolDialup __RPC_FAR * This,
            /* [out] */ UINT __RPC_FAR *pctinfo);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetTypeInfo )( 
            ISmsProtocolDialup __RPC_FAR * This,
            /* [in] */ UINT iTInfo,
            /* [in] */ LCID lcid,
            /* [out] */ ITypeInfo __RPC_FAR *__RPC_FAR *ppTInfo);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetIDsOfNames )( 
            ISmsProtocolDialup __RPC_FAR * This,
            /* [in] */ REFIID riid,
            /* [size_is][in] */ LPOLESTR __RPC_FAR *rgszNames,
            /* [in] */ UINT cNames,
            /* [in] */ LCID lcid,
            /* [size_is][out] */ DISPID __RPC_FAR *rgDispId);
        
        /* [local] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Invoke )( 
            ISmsProtocolDialup __RPC_FAR * This,
            /* [in] */ DISPID dispIdMember,
            /* [in] */ REFIID riid,
            /* [in] */ LCID lcid,
            /* [in] */ WORD wFlags,
            /* [out][in] */ DISPPARAMS __RPC_FAR *pDispParams,
            /* [out] */ VARIANT __RPC_FAR *pVarResult,
            /* [out] */ EXCEPINFO __RPC_FAR *pExcepInfo,
            /* [out] */ UINT __RPC_FAR *puArgErr);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_LastError )( 
            ISmsProtocolDialup __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Version )( 
            ISmsProtocolDialup __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Build )( 
            ISmsProtocolDialup __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ExpirationDate )( 
            ISmsProtocolDialup __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_Reserved )( 
            ISmsProtocolDialup __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_LogFile )( 
            ISmsProtocolDialup __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_LogFile )( 
            ISmsProtocolDialup __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ActivityFile )( 
            ISmsProtocolDialup __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_ActivityFile )( 
            ISmsProtocolDialup __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_DistributionID )( 
            ISmsProtocolDialup __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_DistributionKey )( 
            ISmsProtocolDialup __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Clear )( 
            ISmsProtocolDialup __RPC_FAR * This);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetErrorDescription )( 
            ISmsProtocolDialup __RPC_FAR * This,
            LONG newVal,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Activate )( 
            ISmsProtocolDialup __RPC_FAR * This,
            BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Device )( 
            ISmsProtocolDialup __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_Device )( 
            ISmsProtocolDialup __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_DeviceSpeed )( 
            ISmsProtocolDialup __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_DeviceSpeed )( 
            ISmsProtocolDialup __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_DeviceSettings )( 
            ISmsProtocolDialup __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_DeviceSettings )( 
            ISmsProtocolDialup __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_DeviceInitString )( 
            ISmsProtocolDialup __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_DeviceInitString )( 
            ISmsProtocolDialup __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_DeviceFlowControl )( 
            ISmsProtocolDialup __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_DeviceFlowControl )( 
            ISmsProtocolDialup __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_DialMode )( 
            ISmsProtocolDialup __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_DialMode )( 
            ISmsProtocolDialup __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ProviderDialString )( 
            ISmsProtocolDialup __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_ProviderDialString )( 
            ISmsProtocolDialup __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ProviderPassword )( 
            ISmsProtocolDialup __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_ProviderPassword )( 
            ISmsProtocolDialup __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ProviderType )( 
            ISmsProtocolDialup __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_ProviderType )( 
            ISmsProtocolDialup __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ProviderResponse )( 
            ISmsProtocolDialup __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_AdvancedSettings )( 
            ISmsProtocolDialup __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_AdvancedSettings )( 
            ISmsProtocolDialup __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetDeviceCount )( 
            ISmsProtocolDialup __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetDevice )( 
            ISmsProtocolDialup __RPC_FAR * This,
            LONG lIndex,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Send )( 
            ISmsProtocolDialup __RPC_FAR * This,
            VARIANT __RPC_FAR *pMessage);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *ProviderLoadConfig )( 
            ISmsProtocolDialup __RPC_FAR * This,
            BSTR bstrFileName);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *ProviderSaveConfig )( 
            ISmsProtocolDialup __RPC_FAR * This,
            BSTR bstrFileName);
        
        END_INTERFACE
    } ISmsProtocolDialupVtbl;

    interface ISmsProtocolDialup
    {
        CONST_VTBL struct ISmsProtocolDialupVtbl __RPC_FAR *lpVtbl;
    };

    

#ifdef COBJMACROS


#define ISmsProtocolDialup_QueryInterface(This,riid,ppvObject)	\
    (This)->lpVtbl -> QueryInterface(This,riid,ppvObject)

#define ISmsProtocolDialup_AddRef(This)	\
    (This)->lpVtbl -> AddRef(This)

#define ISmsProtocolDialup_Release(This)	\
    (This)->lpVtbl -> Release(This)


#define ISmsProtocolDialup_GetTypeInfoCount(This,pctinfo)	\
    (This)->lpVtbl -> GetTypeInfoCount(This,pctinfo)

#define ISmsProtocolDialup_GetTypeInfo(This,iTInfo,lcid,ppTInfo)	\
    (This)->lpVtbl -> GetTypeInfo(This,iTInfo,lcid,ppTInfo)

#define ISmsProtocolDialup_GetIDsOfNames(This,riid,rgszNames,cNames,lcid,rgDispId)	\
    (This)->lpVtbl -> GetIDsOfNames(This,riid,rgszNames,cNames,lcid,rgDispId)

#define ISmsProtocolDialup_Invoke(This,dispIdMember,riid,lcid,wFlags,pDispParams,pVarResult,pExcepInfo,puArgErr)	\
    (This)->lpVtbl -> Invoke(This,dispIdMember,riid,lcid,wFlags,pDispParams,pVarResult,pExcepInfo,puArgErr)


#define ISmsProtocolDialup_get_LastError(This,pVal)	\
    (This)->lpVtbl -> get_LastError(This,pVal)

#define ISmsProtocolDialup_get_Version(This,pVal)	\
    (This)->lpVtbl -> get_Version(This,pVal)

#define ISmsProtocolDialup_get_Build(This,pVal)	\
    (This)->lpVtbl -> get_Build(This,pVal)

#define ISmsProtocolDialup_get_ExpirationDate(This,pVal)	\
    (This)->lpVtbl -> get_ExpirationDate(This,pVal)

#define ISmsProtocolDialup_put_Reserved(This,newVal)	\
    (This)->lpVtbl -> put_Reserved(This,newVal)

#define ISmsProtocolDialup_get_LogFile(This,pVal)	\
    (This)->lpVtbl -> get_LogFile(This,pVal)

#define ISmsProtocolDialup_put_LogFile(This,newVal)	\
    (This)->lpVtbl -> put_LogFile(This,newVal)

#define ISmsProtocolDialup_get_ActivityFile(This,pVal)	\
    (This)->lpVtbl -> get_ActivityFile(This,pVal)

#define ISmsProtocolDialup_put_ActivityFile(This,newVal)	\
    (This)->lpVtbl -> put_ActivityFile(This,newVal)

#define ISmsProtocolDialup_put_DistributionID(This,newVal)	\
    (This)->lpVtbl -> put_DistributionID(This,newVal)

#define ISmsProtocolDialup_put_DistributionKey(This,newVal)	\
    (This)->lpVtbl -> put_DistributionKey(This,newVal)

#define ISmsProtocolDialup_Clear(This)	\
    (This)->lpVtbl -> Clear(This)

#define ISmsProtocolDialup_GetErrorDescription(This,newVal,pVal)	\
    (This)->lpVtbl -> GetErrorDescription(This,newVal,pVal)

#define ISmsProtocolDialup_Activate(This,newVal)	\
    (This)->lpVtbl -> Activate(This,newVal)

#define ISmsProtocolDialup_get_Device(This,pVal)	\
    (This)->lpVtbl -> get_Device(This,pVal)

#define ISmsProtocolDialup_put_Device(This,newVal)	\
    (This)->lpVtbl -> put_Device(This,newVal)

#define ISmsProtocolDialup_get_DeviceSpeed(This,pVal)	\
    (This)->lpVtbl -> get_DeviceSpeed(This,pVal)

#define ISmsProtocolDialup_put_DeviceSpeed(This,newVal)	\
    (This)->lpVtbl -> put_DeviceSpeed(This,newVal)

#define ISmsProtocolDialup_get_DeviceSettings(This,pVal)	\
    (This)->lpVtbl -> get_DeviceSettings(This,pVal)

#define ISmsProtocolDialup_put_DeviceSettings(This,newVal)	\
    (This)->lpVtbl -> put_DeviceSettings(This,newVal)

#define ISmsProtocolDialup_get_DeviceInitString(This,pVal)	\
    (This)->lpVtbl -> get_DeviceInitString(This,pVal)

#define ISmsProtocolDialup_put_DeviceInitString(This,newVal)	\
    (This)->lpVtbl -> put_DeviceInitString(This,newVal)

#define ISmsProtocolDialup_get_DeviceFlowControl(This,pVal)	\
    (This)->lpVtbl -> get_DeviceFlowControl(This,pVal)

#define ISmsProtocolDialup_put_DeviceFlowControl(This,newVal)	\
    (This)->lpVtbl -> put_DeviceFlowControl(This,newVal)

#define ISmsProtocolDialup_get_DialMode(This,pVal)	\
    (This)->lpVtbl -> get_DialMode(This,pVal)

#define ISmsProtocolDialup_put_DialMode(This,newVal)	\
    (This)->lpVtbl -> put_DialMode(This,newVal)

#define ISmsProtocolDialup_get_ProviderDialString(This,pVal)	\
    (This)->lpVtbl -> get_ProviderDialString(This,pVal)

#define ISmsProtocolDialup_put_ProviderDialString(This,newVal)	\
    (This)->lpVtbl -> put_ProviderDialString(This,newVal)

#define ISmsProtocolDialup_get_ProviderPassword(This,pVal)	\
    (This)->lpVtbl -> get_ProviderPassword(This,pVal)

#define ISmsProtocolDialup_put_ProviderPassword(This,newVal)	\
    (This)->lpVtbl -> put_ProviderPassword(This,newVal)

#define ISmsProtocolDialup_get_ProviderType(This,pVal)	\
    (This)->lpVtbl -> get_ProviderType(This,pVal)

#define ISmsProtocolDialup_put_ProviderType(This,newVal)	\
    (This)->lpVtbl -> put_ProviderType(This,newVal)

#define ISmsProtocolDialup_get_ProviderResponse(This,pVal)	\
    (This)->lpVtbl -> get_ProviderResponse(This,pVal)

#define ISmsProtocolDialup_get_AdvancedSettings(This,pVal)	\
    (This)->lpVtbl -> get_AdvancedSettings(This,pVal)

#define ISmsProtocolDialup_put_AdvancedSettings(This,newVal)	\
    (This)->lpVtbl -> put_AdvancedSettings(This,newVal)

#define ISmsProtocolDialup_GetDeviceCount(This,pVal)	\
    (This)->lpVtbl -> GetDeviceCount(This,pVal)

#define ISmsProtocolDialup_GetDevice(This,lIndex,pVal)	\
    (This)->lpVtbl -> GetDevice(This,lIndex,pVal)

#define ISmsProtocolDialup_Send(This,pMessage)	\
    (This)->lpVtbl -> Send(This,pMessage)

#define ISmsProtocolDialup_ProviderLoadConfig(This,bstrFileName)	\
    (This)->lpVtbl -> ProviderLoadConfig(This,bstrFileName)

#define ISmsProtocolDialup_ProviderSaveConfig(This,bstrFileName)	\
    (This)->lpVtbl -> ProviderSaveConfig(This,bstrFileName)

#endif /* COBJMACROS */


#endif 	/* C style interface */



/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolDialup_get_LastError_Proxy( 
    ISmsProtocolDialup __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolDialup_get_LastError_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolDialup_get_Version_Proxy( 
    ISmsProtocolDialup __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolDialup_get_Version_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolDialup_get_Build_Proxy( 
    ISmsProtocolDialup __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolDialup_get_Build_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolDialup_get_ExpirationDate_Proxy( 
    ISmsProtocolDialup __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolDialup_get_ExpirationDate_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolDialup_put_Reserved_Proxy( 
    ISmsProtocolDialup __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB ISmsProtocolDialup_put_Reserved_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolDialup_get_LogFile_Proxy( 
    ISmsProtocolDialup __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolDialup_get_LogFile_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolDialup_put_LogFile_Proxy( 
    ISmsProtocolDialup __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsProtocolDialup_put_LogFile_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolDialup_get_ActivityFile_Proxy( 
    ISmsProtocolDialup __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolDialup_get_ActivityFile_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolDialup_put_ActivityFile_Proxy( 
    ISmsProtocolDialup __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsProtocolDialup_put_ActivityFile_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolDialup_put_DistributionID_Proxy( 
    ISmsProtocolDialup __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsProtocolDialup_put_DistributionID_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolDialup_put_DistributionKey_Proxy( 
    ISmsProtocolDialup __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsProtocolDialup_put_DistributionKey_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsProtocolDialup_Clear_Proxy( 
    ISmsProtocolDialup __RPC_FAR * This);


void __RPC_STUB ISmsProtocolDialup_Clear_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsProtocolDialup_GetErrorDescription_Proxy( 
    ISmsProtocolDialup __RPC_FAR * This,
    LONG newVal,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolDialup_GetErrorDescription_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsProtocolDialup_Activate_Proxy( 
    ISmsProtocolDialup __RPC_FAR * This,
    BSTR newVal);


void __RPC_STUB ISmsProtocolDialup_Activate_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolDialup_get_Device_Proxy( 
    ISmsProtocolDialup __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolDialup_get_Device_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolDialup_put_Device_Proxy( 
    ISmsProtocolDialup __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsProtocolDialup_put_Device_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolDialup_get_DeviceSpeed_Proxy( 
    ISmsProtocolDialup __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolDialup_get_DeviceSpeed_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolDialup_put_DeviceSpeed_Proxy( 
    ISmsProtocolDialup __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB ISmsProtocolDialup_put_DeviceSpeed_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolDialup_get_DeviceSettings_Proxy( 
    ISmsProtocolDialup __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolDialup_get_DeviceSettings_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolDialup_put_DeviceSettings_Proxy( 
    ISmsProtocolDialup __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB ISmsProtocolDialup_put_DeviceSettings_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolDialup_get_DeviceInitString_Proxy( 
    ISmsProtocolDialup __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolDialup_get_DeviceInitString_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolDialup_put_DeviceInitString_Proxy( 
    ISmsProtocolDialup __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsProtocolDialup_put_DeviceInitString_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolDialup_get_DeviceFlowControl_Proxy( 
    ISmsProtocolDialup __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolDialup_get_DeviceFlowControl_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolDialup_put_DeviceFlowControl_Proxy( 
    ISmsProtocolDialup __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB ISmsProtocolDialup_put_DeviceFlowControl_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolDialup_get_DialMode_Proxy( 
    ISmsProtocolDialup __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolDialup_get_DialMode_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolDialup_put_DialMode_Proxy( 
    ISmsProtocolDialup __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB ISmsProtocolDialup_put_DialMode_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolDialup_get_ProviderDialString_Proxy( 
    ISmsProtocolDialup __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolDialup_get_ProviderDialString_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolDialup_put_ProviderDialString_Proxy( 
    ISmsProtocolDialup __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsProtocolDialup_put_ProviderDialString_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolDialup_get_ProviderPassword_Proxy( 
    ISmsProtocolDialup __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolDialup_get_ProviderPassword_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolDialup_put_ProviderPassword_Proxy( 
    ISmsProtocolDialup __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsProtocolDialup_put_ProviderPassword_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolDialup_get_ProviderType_Proxy( 
    ISmsProtocolDialup __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolDialup_get_ProviderType_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolDialup_put_ProviderType_Proxy( 
    ISmsProtocolDialup __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB ISmsProtocolDialup_put_ProviderType_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolDialup_get_ProviderResponse_Proxy( 
    ISmsProtocolDialup __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolDialup_get_ProviderResponse_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsProtocolDialup_get_AdvancedSettings_Proxy( 
    ISmsProtocolDialup __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolDialup_get_AdvancedSettings_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsProtocolDialup_put_AdvancedSettings_Proxy( 
    ISmsProtocolDialup __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsProtocolDialup_put_AdvancedSettings_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsProtocolDialup_GetDeviceCount_Proxy( 
    ISmsProtocolDialup __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolDialup_GetDeviceCount_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsProtocolDialup_GetDevice_Proxy( 
    ISmsProtocolDialup __RPC_FAR * This,
    LONG lIndex,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsProtocolDialup_GetDevice_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsProtocolDialup_Send_Proxy( 
    ISmsProtocolDialup __RPC_FAR * This,
    VARIANT __RPC_FAR *pMessage);


void __RPC_STUB ISmsProtocolDialup_Send_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsProtocolDialup_ProviderLoadConfig_Proxy( 
    ISmsProtocolDialup __RPC_FAR * This,
    BSTR bstrFileName);


void __RPC_STUB ISmsProtocolDialup_ProviderLoadConfig_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsProtocolDialup_ProviderSaveConfig_Proxy( 
    ISmsProtocolDialup __RPC_FAR * This,
    BSTR bstrFileName);


void __RPC_STUB ISmsProtocolDialup_ProviderSaveConfig_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);



#endif 	/* __ISmsProtocolDialup_INTERFACE_DEFINED__ */


#ifndef __IPagerProtocolSnpp_INTERFACE_DEFINED__
#define __IPagerProtocolSnpp_INTERFACE_DEFINED__

/* interface IPagerProtocolSnpp */
/* [unique][helpstring][dual][uuid][object] */ 


EXTERN_C const IID IID_IPagerProtocolSnpp;

#if defined(__cplusplus) && !defined(CINTERFACE)
    
    MIDL_INTERFACE("AAFC490C-6EFB-42E5-8267-7BE9FB2ACF8F")
    IPagerProtocolSnpp : public IDispatch
    {
    public:
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_LastError( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Version( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Build( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ExpirationDate( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_Reserved( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_LogFile( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_LogFile( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_DistributionID( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_DistributionKey( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE Clear( void) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE GetErrorDescription( 
            LONG newVal,
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE Activate( 
            BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Server( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_Server( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ServerPort( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_ServerPort( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ServerTimeout( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_ServerTimeout( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ProviderPassword( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_ProviderPassword( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ProviderResponse( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_AdvancedSettings( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_AdvancedSettings( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE Send( 
            VARIANT __RPC_FAR *pVariant) = 0;
        
    };
    
#else 	/* C style interface */

    typedef struct IPagerProtocolSnppVtbl
    {
        BEGIN_INTERFACE
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *QueryInterface )( 
            IPagerProtocolSnpp __RPC_FAR * This,
            /* [in] */ REFIID riid,
            /* [iid_is][out] */ void __RPC_FAR *__RPC_FAR *ppvObject);
        
        ULONG ( STDMETHODCALLTYPE __RPC_FAR *AddRef )( 
            IPagerProtocolSnpp __RPC_FAR * This);
        
        ULONG ( STDMETHODCALLTYPE __RPC_FAR *Release )( 
            IPagerProtocolSnpp __RPC_FAR * This);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetTypeInfoCount )( 
            IPagerProtocolSnpp __RPC_FAR * This,
            /* [out] */ UINT __RPC_FAR *pctinfo);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetTypeInfo )( 
            IPagerProtocolSnpp __RPC_FAR * This,
            /* [in] */ UINT iTInfo,
            /* [in] */ LCID lcid,
            /* [out] */ ITypeInfo __RPC_FAR *__RPC_FAR *ppTInfo);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetIDsOfNames )( 
            IPagerProtocolSnpp __RPC_FAR * This,
            /* [in] */ REFIID riid,
            /* [size_is][in] */ LPOLESTR __RPC_FAR *rgszNames,
            /* [in] */ UINT cNames,
            /* [in] */ LCID lcid,
            /* [size_is][out] */ DISPID __RPC_FAR *rgDispId);
        
        /* [local] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Invoke )( 
            IPagerProtocolSnpp __RPC_FAR * This,
            /* [in] */ DISPID dispIdMember,
            /* [in] */ REFIID riid,
            /* [in] */ LCID lcid,
            /* [in] */ WORD wFlags,
            /* [out][in] */ DISPPARAMS __RPC_FAR *pDispParams,
            /* [out] */ VARIANT __RPC_FAR *pVarResult,
            /* [out] */ EXCEPINFO __RPC_FAR *pExcepInfo,
            /* [out] */ UINT __RPC_FAR *puArgErr);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_LastError )( 
            IPagerProtocolSnpp __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Version )( 
            IPagerProtocolSnpp __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Build )( 
            IPagerProtocolSnpp __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ExpirationDate )( 
            IPagerProtocolSnpp __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_Reserved )( 
            IPagerProtocolSnpp __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_LogFile )( 
            IPagerProtocolSnpp __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_LogFile )( 
            IPagerProtocolSnpp __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_DistributionID )( 
            IPagerProtocolSnpp __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_DistributionKey )( 
            IPagerProtocolSnpp __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Clear )( 
            IPagerProtocolSnpp __RPC_FAR * This);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetErrorDescription )( 
            IPagerProtocolSnpp __RPC_FAR * This,
            LONG newVal,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Activate )( 
            IPagerProtocolSnpp __RPC_FAR * This,
            BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Server )( 
            IPagerProtocolSnpp __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_Server )( 
            IPagerProtocolSnpp __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ServerPort )( 
            IPagerProtocolSnpp __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_ServerPort )( 
            IPagerProtocolSnpp __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ServerTimeout )( 
            IPagerProtocolSnpp __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_ServerTimeout )( 
            IPagerProtocolSnpp __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ProviderPassword )( 
            IPagerProtocolSnpp __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_ProviderPassword )( 
            IPagerProtocolSnpp __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ProviderResponse )( 
            IPagerProtocolSnpp __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_AdvancedSettings )( 
            IPagerProtocolSnpp __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_AdvancedSettings )( 
            IPagerProtocolSnpp __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Send )( 
            IPagerProtocolSnpp __RPC_FAR * This,
            VARIANT __RPC_FAR *pVariant);
        
        END_INTERFACE
    } IPagerProtocolSnppVtbl;

    interface IPagerProtocolSnpp
    {
        CONST_VTBL struct IPagerProtocolSnppVtbl __RPC_FAR *lpVtbl;
    };

    

#ifdef COBJMACROS


#define IPagerProtocolSnpp_QueryInterface(This,riid,ppvObject)	\
    (This)->lpVtbl -> QueryInterface(This,riid,ppvObject)

#define IPagerProtocolSnpp_AddRef(This)	\
    (This)->lpVtbl -> AddRef(This)

#define IPagerProtocolSnpp_Release(This)	\
    (This)->lpVtbl -> Release(This)


#define IPagerProtocolSnpp_GetTypeInfoCount(This,pctinfo)	\
    (This)->lpVtbl -> GetTypeInfoCount(This,pctinfo)

#define IPagerProtocolSnpp_GetTypeInfo(This,iTInfo,lcid,ppTInfo)	\
    (This)->lpVtbl -> GetTypeInfo(This,iTInfo,lcid,ppTInfo)

#define IPagerProtocolSnpp_GetIDsOfNames(This,riid,rgszNames,cNames,lcid,rgDispId)	\
    (This)->lpVtbl -> GetIDsOfNames(This,riid,rgszNames,cNames,lcid,rgDispId)

#define IPagerProtocolSnpp_Invoke(This,dispIdMember,riid,lcid,wFlags,pDispParams,pVarResult,pExcepInfo,puArgErr)	\
    (This)->lpVtbl -> Invoke(This,dispIdMember,riid,lcid,wFlags,pDispParams,pVarResult,pExcepInfo,puArgErr)


#define IPagerProtocolSnpp_get_LastError(This,pVal)	\
    (This)->lpVtbl -> get_LastError(This,pVal)

#define IPagerProtocolSnpp_get_Version(This,pVal)	\
    (This)->lpVtbl -> get_Version(This,pVal)

#define IPagerProtocolSnpp_get_Build(This,pVal)	\
    (This)->lpVtbl -> get_Build(This,pVal)

#define IPagerProtocolSnpp_get_ExpirationDate(This,pVal)	\
    (This)->lpVtbl -> get_ExpirationDate(This,pVal)

#define IPagerProtocolSnpp_put_Reserved(This,newVal)	\
    (This)->lpVtbl -> put_Reserved(This,newVal)

#define IPagerProtocolSnpp_get_LogFile(This,pVal)	\
    (This)->lpVtbl -> get_LogFile(This,pVal)

#define IPagerProtocolSnpp_put_LogFile(This,newVal)	\
    (This)->lpVtbl -> put_LogFile(This,newVal)

#define IPagerProtocolSnpp_put_DistributionID(This,newVal)	\
    (This)->lpVtbl -> put_DistributionID(This,newVal)

#define IPagerProtocolSnpp_put_DistributionKey(This,newVal)	\
    (This)->lpVtbl -> put_DistributionKey(This,newVal)

#define IPagerProtocolSnpp_Clear(This)	\
    (This)->lpVtbl -> Clear(This)

#define IPagerProtocolSnpp_GetErrorDescription(This,newVal,pVal)	\
    (This)->lpVtbl -> GetErrorDescription(This,newVal,pVal)

#define IPagerProtocolSnpp_Activate(This,newVal)	\
    (This)->lpVtbl -> Activate(This,newVal)

#define IPagerProtocolSnpp_get_Server(This,pVal)	\
    (This)->lpVtbl -> get_Server(This,pVal)

#define IPagerProtocolSnpp_put_Server(This,newVal)	\
    (This)->lpVtbl -> put_Server(This,newVal)

#define IPagerProtocolSnpp_get_ServerPort(This,pVal)	\
    (This)->lpVtbl -> get_ServerPort(This,pVal)

#define IPagerProtocolSnpp_put_ServerPort(This,newVal)	\
    (This)->lpVtbl -> put_ServerPort(This,newVal)

#define IPagerProtocolSnpp_get_ServerTimeout(This,pVal)	\
    (This)->lpVtbl -> get_ServerTimeout(This,pVal)

#define IPagerProtocolSnpp_put_ServerTimeout(This,newVal)	\
    (This)->lpVtbl -> put_ServerTimeout(This,newVal)

#define IPagerProtocolSnpp_get_ProviderPassword(This,pVal)	\
    (This)->lpVtbl -> get_ProviderPassword(This,pVal)

#define IPagerProtocolSnpp_put_ProviderPassword(This,newVal)	\
    (This)->lpVtbl -> put_ProviderPassword(This,newVal)

#define IPagerProtocolSnpp_get_ProviderResponse(This,pVal)	\
    (This)->lpVtbl -> get_ProviderResponse(This,pVal)

#define IPagerProtocolSnpp_get_AdvancedSettings(This,pVal)	\
    (This)->lpVtbl -> get_AdvancedSettings(This,pVal)

#define IPagerProtocolSnpp_put_AdvancedSettings(This,newVal)	\
    (This)->lpVtbl -> put_AdvancedSettings(This,newVal)

#define IPagerProtocolSnpp_Send(This,pVariant)	\
    (This)->lpVtbl -> Send(This,pVariant)

#endif /* COBJMACROS */


#endif 	/* C style interface */



/* [id][propget] */ HRESULT STDMETHODCALLTYPE IPagerProtocolSnpp_get_LastError_Proxy( 
    IPagerProtocolSnpp __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IPagerProtocolSnpp_get_LastError_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IPagerProtocolSnpp_get_Version_Proxy( 
    IPagerProtocolSnpp __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IPagerProtocolSnpp_get_Version_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IPagerProtocolSnpp_get_Build_Proxy( 
    IPagerProtocolSnpp __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IPagerProtocolSnpp_get_Build_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IPagerProtocolSnpp_get_ExpirationDate_Proxy( 
    IPagerProtocolSnpp __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IPagerProtocolSnpp_get_ExpirationDate_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IPagerProtocolSnpp_put_Reserved_Proxy( 
    IPagerProtocolSnpp __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB IPagerProtocolSnpp_put_Reserved_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IPagerProtocolSnpp_get_LogFile_Proxy( 
    IPagerProtocolSnpp __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IPagerProtocolSnpp_get_LogFile_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IPagerProtocolSnpp_put_LogFile_Proxy( 
    IPagerProtocolSnpp __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB IPagerProtocolSnpp_put_LogFile_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IPagerProtocolSnpp_put_DistributionID_Proxy( 
    IPagerProtocolSnpp __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB IPagerProtocolSnpp_put_DistributionID_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IPagerProtocolSnpp_put_DistributionKey_Proxy( 
    IPagerProtocolSnpp __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB IPagerProtocolSnpp_put_DistributionKey_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE IPagerProtocolSnpp_Clear_Proxy( 
    IPagerProtocolSnpp __RPC_FAR * This);


void __RPC_STUB IPagerProtocolSnpp_Clear_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE IPagerProtocolSnpp_GetErrorDescription_Proxy( 
    IPagerProtocolSnpp __RPC_FAR * This,
    LONG newVal,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IPagerProtocolSnpp_GetErrorDescription_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE IPagerProtocolSnpp_Activate_Proxy( 
    IPagerProtocolSnpp __RPC_FAR * This,
    BSTR newVal);


void __RPC_STUB IPagerProtocolSnpp_Activate_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IPagerProtocolSnpp_get_Server_Proxy( 
    IPagerProtocolSnpp __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IPagerProtocolSnpp_get_Server_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IPagerProtocolSnpp_put_Server_Proxy( 
    IPagerProtocolSnpp __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB IPagerProtocolSnpp_put_Server_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IPagerProtocolSnpp_get_ServerPort_Proxy( 
    IPagerProtocolSnpp __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IPagerProtocolSnpp_get_ServerPort_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IPagerProtocolSnpp_put_ServerPort_Proxy( 
    IPagerProtocolSnpp __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB IPagerProtocolSnpp_put_ServerPort_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IPagerProtocolSnpp_get_ServerTimeout_Proxy( 
    IPagerProtocolSnpp __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IPagerProtocolSnpp_get_ServerTimeout_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IPagerProtocolSnpp_put_ServerTimeout_Proxy( 
    IPagerProtocolSnpp __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB IPagerProtocolSnpp_put_ServerTimeout_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IPagerProtocolSnpp_get_ProviderPassword_Proxy( 
    IPagerProtocolSnpp __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IPagerProtocolSnpp_get_ProviderPassword_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IPagerProtocolSnpp_put_ProviderPassword_Proxy( 
    IPagerProtocolSnpp __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB IPagerProtocolSnpp_put_ProviderPassword_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IPagerProtocolSnpp_get_ProviderResponse_Proxy( 
    IPagerProtocolSnpp __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IPagerProtocolSnpp_get_ProviderResponse_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IPagerProtocolSnpp_get_AdvancedSettings_Proxy( 
    IPagerProtocolSnpp __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IPagerProtocolSnpp_get_AdvancedSettings_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IPagerProtocolSnpp_put_AdvancedSettings_Proxy( 
    IPagerProtocolSnpp __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB IPagerProtocolSnpp_put_AdvancedSettings_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE IPagerProtocolSnpp_Send_Proxy( 
    IPagerProtocolSnpp __RPC_FAR * This,
    VARIANT __RPC_FAR *pVariant);


void __RPC_STUB IPagerProtocolSnpp_Send_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);



#endif 	/* __IPagerProtocolSnpp_INTERFACE_DEFINED__ */


#ifndef __ISmsDataRingtone_INTERFACE_DEFINED__
#define __ISmsDataRingtone_INTERFACE_DEFINED__

/* interface ISmsDataRingtone */
/* [unique][helpstring][dual][uuid][object] */ 


EXTERN_C const IID IID_ISmsDataRingtone;

#if defined(__cplusplus) && !defined(CINTERFACE)
    
    MIDL_INTERFACE("635FA587-04B6-4176-86E6-A6E6D6EE13D8")
    ISmsDataRingtone : public IDispatch
    {
    public:
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_LastError( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Version( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Build( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ExpirationDate( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_Reserved( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_DistributionID( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_DistributionKey( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE Clear( void) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE GetErrorDescription( 
            LONG newVal,
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE Activate( 
            BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_EncodedMessage( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE LoadRTTTL( 
            BSTR bstrFileName) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE Encode( void) = 0;
        
    };
    
#else 	/* C style interface */

    typedef struct ISmsDataRingtoneVtbl
    {
        BEGIN_INTERFACE
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *QueryInterface )( 
            ISmsDataRingtone __RPC_FAR * This,
            /* [in] */ REFIID riid,
            /* [iid_is][out] */ void __RPC_FAR *__RPC_FAR *ppvObject);
        
        ULONG ( STDMETHODCALLTYPE __RPC_FAR *AddRef )( 
            ISmsDataRingtone __RPC_FAR * This);
        
        ULONG ( STDMETHODCALLTYPE __RPC_FAR *Release )( 
            ISmsDataRingtone __RPC_FAR * This);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetTypeInfoCount )( 
            ISmsDataRingtone __RPC_FAR * This,
            /* [out] */ UINT __RPC_FAR *pctinfo);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetTypeInfo )( 
            ISmsDataRingtone __RPC_FAR * This,
            /* [in] */ UINT iTInfo,
            /* [in] */ LCID lcid,
            /* [out] */ ITypeInfo __RPC_FAR *__RPC_FAR *ppTInfo);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetIDsOfNames )( 
            ISmsDataRingtone __RPC_FAR * This,
            /* [in] */ REFIID riid,
            /* [size_is][in] */ LPOLESTR __RPC_FAR *rgszNames,
            /* [in] */ UINT cNames,
            /* [in] */ LCID lcid,
            /* [size_is][out] */ DISPID __RPC_FAR *rgDispId);
        
        /* [local] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Invoke )( 
            ISmsDataRingtone __RPC_FAR * This,
            /* [in] */ DISPID dispIdMember,
            /* [in] */ REFIID riid,
            /* [in] */ LCID lcid,
            /* [in] */ WORD wFlags,
            /* [out][in] */ DISPPARAMS __RPC_FAR *pDispParams,
            /* [out] */ VARIANT __RPC_FAR *pVarResult,
            /* [out] */ EXCEPINFO __RPC_FAR *pExcepInfo,
            /* [out] */ UINT __RPC_FAR *puArgErr);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_LastError )( 
            ISmsDataRingtone __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Version )( 
            ISmsDataRingtone __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Build )( 
            ISmsDataRingtone __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ExpirationDate )( 
            ISmsDataRingtone __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_Reserved )( 
            ISmsDataRingtone __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_DistributionID )( 
            ISmsDataRingtone __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_DistributionKey )( 
            ISmsDataRingtone __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Clear )( 
            ISmsDataRingtone __RPC_FAR * This);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetErrorDescription )( 
            ISmsDataRingtone __RPC_FAR * This,
            LONG newVal,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Activate )( 
            ISmsDataRingtone __RPC_FAR * This,
            BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_EncodedMessage )( 
            ISmsDataRingtone __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *LoadRTTTL )( 
            ISmsDataRingtone __RPC_FAR * This,
            BSTR bstrFileName);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Encode )( 
            ISmsDataRingtone __RPC_FAR * This);
        
        END_INTERFACE
    } ISmsDataRingtoneVtbl;

    interface ISmsDataRingtone
    {
        CONST_VTBL struct ISmsDataRingtoneVtbl __RPC_FAR *lpVtbl;
    };

    

#ifdef COBJMACROS


#define ISmsDataRingtone_QueryInterface(This,riid,ppvObject)	\
    (This)->lpVtbl -> QueryInterface(This,riid,ppvObject)

#define ISmsDataRingtone_AddRef(This)	\
    (This)->lpVtbl -> AddRef(This)

#define ISmsDataRingtone_Release(This)	\
    (This)->lpVtbl -> Release(This)


#define ISmsDataRingtone_GetTypeInfoCount(This,pctinfo)	\
    (This)->lpVtbl -> GetTypeInfoCount(This,pctinfo)

#define ISmsDataRingtone_GetTypeInfo(This,iTInfo,lcid,ppTInfo)	\
    (This)->lpVtbl -> GetTypeInfo(This,iTInfo,lcid,ppTInfo)

#define ISmsDataRingtone_GetIDsOfNames(This,riid,rgszNames,cNames,lcid,rgDispId)	\
    (This)->lpVtbl -> GetIDsOfNames(This,riid,rgszNames,cNames,lcid,rgDispId)

#define ISmsDataRingtone_Invoke(This,dispIdMember,riid,lcid,wFlags,pDispParams,pVarResult,pExcepInfo,puArgErr)	\
    (This)->lpVtbl -> Invoke(This,dispIdMember,riid,lcid,wFlags,pDispParams,pVarResult,pExcepInfo,puArgErr)


#define ISmsDataRingtone_get_LastError(This,pVal)	\
    (This)->lpVtbl -> get_LastError(This,pVal)

#define ISmsDataRingtone_get_Version(This,pVal)	\
    (This)->lpVtbl -> get_Version(This,pVal)

#define ISmsDataRingtone_get_Build(This,pVal)	\
    (This)->lpVtbl -> get_Build(This,pVal)

#define ISmsDataRingtone_get_ExpirationDate(This,pVal)	\
    (This)->lpVtbl -> get_ExpirationDate(This,pVal)

#define ISmsDataRingtone_put_Reserved(This,newVal)	\
    (This)->lpVtbl -> put_Reserved(This,newVal)

#define ISmsDataRingtone_put_DistributionID(This,newVal)	\
    (This)->lpVtbl -> put_DistributionID(This,newVal)

#define ISmsDataRingtone_put_DistributionKey(This,newVal)	\
    (This)->lpVtbl -> put_DistributionKey(This,newVal)

#define ISmsDataRingtone_Clear(This)	\
    (This)->lpVtbl -> Clear(This)

#define ISmsDataRingtone_GetErrorDescription(This,newVal,pVal)	\
    (This)->lpVtbl -> GetErrorDescription(This,newVal,pVal)

#define ISmsDataRingtone_Activate(This,newVal)	\
    (This)->lpVtbl -> Activate(This,newVal)

#define ISmsDataRingtone_get_EncodedMessage(This,pVal)	\
    (This)->lpVtbl -> get_EncodedMessage(This,pVal)

#define ISmsDataRingtone_LoadRTTTL(This,bstrFileName)	\
    (This)->lpVtbl -> LoadRTTTL(This,bstrFileName)

#define ISmsDataRingtone_Encode(This)	\
    (This)->lpVtbl -> Encode(This)

#endif /* COBJMACROS */


#endif 	/* C style interface */



/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDataRingtone_get_LastError_Proxy( 
    ISmsDataRingtone __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsDataRingtone_get_LastError_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDataRingtone_get_Version_Proxy( 
    ISmsDataRingtone __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsDataRingtone_get_Version_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDataRingtone_get_Build_Proxy( 
    ISmsDataRingtone __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsDataRingtone_get_Build_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDataRingtone_get_ExpirationDate_Proxy( 
    ISmsDataRingtone __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsDataRingtone_get_ExpirationDate_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsDataRingtone_put_Reserved_Proxy( 
    ISmsDataRingtone __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB ISmsDataRingtone_put_Reserved_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsDataRingtone_put_DistributionID_Proxy( 
    ISmsDataRingtone __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsDataRingtone_put_DistributionID_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsDataRingtone_put_DistributionKey_Proxy( 
    ISmsDataRingtone __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsDataRingtone_put_DistributionKey_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsDataRingtone_Clear_Proxy( 
    ISmsDataRingtone __RPC_FAR * This);


void __RPC_STUB ISmsDataRingtone_Clear_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsDataRingtone_GetErrorDescription_Proxy( 
    ISmsDataRingtone __RPC_FAR * This,
    LONG newVal,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsDataRingtone_GetErrorDescription_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsDataRingtone_Activate_Proxy( 
    ISmsDataRingtone __RPC_FAR * This,
    BSTR newVal);


void __RPC_STUB ISmsDataRingtone_Activate_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDataRingtone_get_EncodedMessage_Proxy( 
    ISmsDataRingtone __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsDataRingtone_get_EncodedMessage_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsDataRingtone_LoadRTTTL_Proxy( 
    ISmsDataRingtone __RPC_FAR * This,
    BSTR bstrFileName);


void __RPC_STUB ISmsDataRingtone_LoadRTTTL_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsDataRingtone_Encode_Proxy( 
    ISmsDataRingtone __RPC_FAR * This);


void __RPC_STUB ISmsDataRingtone_Encode_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);



#endif 	/* __ISmsDataRingtone_INTERFACE_DEFINED__ */


#ifndef __ISmsDataPicture_INTERFACE_DEFINED__
#define __ISmsDataPicture_INTERFACE_DEFINED__

/* interface ISmsDataPicture */
/* [unique][helpstring][dual][uuid][object] */ 


EXTERN_C const IID IID_ISmsDataPicture;

#if defined(__cplusplus) && !defined(CINTERFACE)
    
    MIDL_INTERFACE("8A00B602-894E-4CA3-92EC-5921F29E302B")
    ISmsDataPicture : public IDispatch
    {
    public:
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_LastError( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Version( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Build( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ExpirationDate( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_Reserved( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_DistributionID( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_DistributionKey( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE Clear( void) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE GetErrorDescription( 
            LONG newVal,
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE Activate( 
            BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_PictureType( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_PictureType( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_BitmapFile( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_BitmapFile( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_CountryCode( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_CountryCode( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_NetworkCode( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_NetworkCode( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Text( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_Text( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_EncodedMessage( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE Encode( void) = 0;
        
    };
    
#else 	/* C style interface */

    typedef struct ISmsDataPictureVtbl
    {
        BEGIN_INTERFACE
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *QueryInterface )( 
            ISmsDataPicture __RPC_FAR * This,
            /* [in] */ REFIID riid,
            /* [iid_is][out] */ void __RPC_FAR *__RPC_FAR *ppvObject);
        
        ULONG ( STDMETHODCALLTYPE __RPC_FAR *AddRef )( 
            ISmsDataPicture __RPC_FAR * This);
        
        ULONG ( STDMETHODCALLTYPE __RPC_FAR *Release )( 
            ISmsDataPicture __RPC_FAR * This);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetTypeInfoCount )( 
            ISmsDataPicture __RPC_FAR * This,
            /* [out] */ UINT __RPC_FAR *pctinfo);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetTypeInfo )( 
            ISmsDataPicture __RPC_FAR * This,
            /* [in] */ UINT iTInfo,
            /* [in] */ LCID lcid,
            /* [out] */ ITypeInfo __RPC_FAR *__RPC_FAR *ppTInfo);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetIDsOfNames )( 
            ISmsDataPicture __RPC_FAR * This,
            /* [in] */ REFIID riid,
            /* [size_is][in] */ LPOLESTR __RPC_FAR *rgszNames,
            /* [in] */ UINT cNames,
            /* [in] */ LCID lcid,
            /* [size_is][out] */ DISPID __RPC_FAR *rgDispId);
        
        /* [local] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Invoke )( 
            ISmsDataPicture __RPC_FAR * This,
            /* [in] */ DISPID dispIdMember,
            /* [in] */ REFIID riid,
            /* [in] */ LCID lcid,
            /* [in] */ WORD wFlags,
            /* [out][in] */ DISPPARAMS __RPC_FAR *pDispParams,
            /* [out] */ VARIANT __RPC_FAR *pVarResult,
            /* [out] */ EXCEPINFO __RPC_FAR *pExcepInfo,
            /* [out] */ UINT __RPC_FAR *puArgErr);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_LastError )( 
            ISmsDataPicture __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Version )( 
            ISmsDataPicture __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Build )( 
            ISmsDataPicture __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ExpirationDate )( 
            ISmsDataPicture __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_Reserved )( 
            ISmsDataPicture __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_DistributionID )( 
            ISmsDataPicture __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_DistributionKey )( 
            ISmsDataPicture __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Clear )( 
            ISmsDataPicture __RPC_FAR * This);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetErrorDescription )( 
            ISmsDataPicture __RPC_FAR * This,
            LONG newVal,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Activate )( 
            ISmsDataPicture __RPC_FAR * This,
            BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_PictureType )( 
            ISmsDataPicture __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_PictureType )( 
            ISmsDataPicture __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_BitmapFile )( 
            ISmsDataPicture __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_BitmapFile )( 
            ISmsDataPicture __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_CountryCode )( 
            ISmsDataPicture __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_CountryCode )( 
            ISmsDataPicture __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_NetworkCode )( 
            ISmsDataPicture __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_NetworkCode )( 
            ISmsDataPicture __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Text )( 
            ISmsDataPicture __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_Text )( 
            ISmsDataPicture __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_EncodedMessage )( 
            ISmsDataPicture __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Encode )( 
            ISmsDataPicture __RPC_FAR * This);
        
        END_INTERFACE
    } ISmsDataPictureVtbl;

    interface ISmsDataPicture
    {
        CONST_VTBL struct ISmsDataPictureVtbl __RPC_FAR *lpVtbl;
    };

    

#ifdef COBJMACROS


#define ISmsDataPicture_QueryInterface(This,riid,ppvObject)	\
    (This)->lpVtbl -> QueryInterface(This,riid,ppvObject)

#define ISmsDataPicture_AddRef(This)	\
    (This)->lpVtbl -> AddRef(This)

#define ISmsDataPicture_Release(This)	\
    (This)->lpVtbl -> Release(This)


#define ISmsDataPicture_GetTypeInfoCount(This,pctinfo)	\
    (This)->lpVtbl -> GetTypeInfoCount(This,pctinfo)

#define ISmsDataPicture_GetTypeInfo(This,iTInfo,lcid,ppTInfo)	\
    (This)->lpVtbl -> GetTypeInfo(This,iTInfo,lcid,ppTInfo)

#define ISmsDataPicture_GetIDsOfNames(This,riid,rgszNames,cNames,lcid,rgDispId)	\
    (This)->lpVtbl -> GetIDsOfNames(This,riid,rgszNames,cNames,lcid,rgDispId)

#define ISmsDataPicture_Invoke(This,dispIdMember,riid,lcid,wFlags,pDispParams,pVarResult,pExcepInfo,puArgErr)	\
    (This)->lpVtbl -> Invoke(This,dispIdMember,riid,lcid,wFlags,pDispParams,pVarResult,pExcepInfo,puArgErr)


#define ISmsDataPicture_get_LastError(This,pVal)	\
    (This)->lpVtbl -> get_LastError(This,pVal)

#define ISmsDataPicture_get_Version(This,pVal)	\
    (This)->lpVtbl -> get_Version(This,pVal)

#define ISmsDataPicture_get_Build(This,pVal)	\
    (This)->lpVtbl -> get_Build(This,pVal)

#define ISmsDataPicture_get_ExpirationDate(This,pVal)	\
    (This)->lpVtbl -> get_ExpirationDate(This,pVal)

#define ISmsDataPicture_put_Reserved(This,newVal)	\
    (This)->lpVtbl -> put_Reserved(This,newVal)

#define ISmsDataPicture_put_DistributionID(This,newVal)	\
    (This)->lpVtbl -> put_DistributionID(This,newVal)

#define ISmsDataPicture_put_DistributionKey(This,newVal)	\
    (This)->lpVtbl -> put_DistributionKey(This,newVal)

#define ISmsDataPicture_Clear(This)	\
    (This)->lpVtbl -> Clear(This)

#define ISmsDataPicture_GetErrorDescription(This,newVal,pVal)	\
    (This)->lpVtbl -> GetErrorDescription(This,newVal,pVal)

#define ISmsDataPicture_Activate(This,newVal)	\
    (This)->lpVtbl -> Activate(This,newVal)

#define ISmsDataPicture_get_PictureType(This,pVal)	\
    (This)->lpVtbl -> get_PictureType(This,pVal)

#define ISmsDataPicture_put_PictureType(This,newVal)	\
    (This)->lpVtbl -> put_PictureType(This,newVal)

#define ISmsDataPicture_get_BitmapFile(This,pVal)	\
    (This)->lpVtbl -> get_BitmapFile(This,pVal)

#define ISmsDataPicture_put_BitmapFile(This,newVal)	\
    (This)->lpVtbl -> put_BitmapFile(This,newVal)

#define ISmsDataPicture_get_CountryCode(This,pVal)	\
    (This)->lpVtbl -> get_CountryCode(This,pVal)

#define ISmsDataPicture_put_CountryCode(This,newVal)	\
    (This)->lpVtbl -> put_CountryCode(This,newVal)

#define ISmsDataPicture_get_NetworkCode(This,pVal)	\
    (This)->lpVtbl -> get_NetworkCode(This,pVal)

#define ISmsDataPicture_put_NetworkCode(This,newVal)	\
    (This)->lpVtbl -> put_NetworkCode(This,newVal)

#define ISmsDataPicture_get_Text(This,pVal)	\
    (This)->lpVtbl -> get_Text(This,pVal)

#define ISmsDataPicture_put_Text(This,newVal)	\
    (This)->lpVtbl -> put_Text(This,newVal)

#define ISmsDataPicture_get_EncodedMessage(This,pVal)	\
    (This)->lpVtbl -> get_EncodedMessage(This,pVal)

#define ISmsDataPicture_Encode(This)	\
    (This)->lpVtbl -> Encode(This)

#endif /* COBJMACROS */


#endif 	/* C style interface */



/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDataPicture_get_LastError_Proxy( 
    ISmsDataPicture __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsDataPicture_get_LastError_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDataPicture_get_Version_Proxy( 
    ISmsDataPicture __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsDataPicture_get_Version_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDataPicture_get_Build_Proxy( 
    ISmsDataPicture __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsDataPicture_get_Build_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDataPicture_get_ExpirationDate_Proxy( 
    ISmsDataPicture __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsDataPicture_get_ExpirationDate_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsDataPicture_put_Reserved_Proxy( 
    ISmsDataPicture __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB ISmsDataPicture_put_Reserved_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsDataPicture_put_DistributionID_Proxy( 
    ISmsDataPicture __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsDataPicture_put_DistributionID_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsDataPicture_put_DistributionKey_Proxy( 
    ISmsDataPicture __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsDataPicture_put_DistributionKey_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsDataPicture_Clear_Proxy( 
    ISmsDataPicture __RPC_FAR * This);


void __RPC_STUB ISmsDataPicture_Clear_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsDataPicture_GetErrorDescription_Proxy( 
    ISmsDataPicture __RPC_FAR * This,
    LONG newVal,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsDataPicture_GetErrorDescription_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsDataPicture_Activate_Proxy( 
    ISmsDataPicture __RPC_FAR * This,
    BSTR newVal);


void __RPC_STUB ISmsDataPicture_Activate_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDataPicture_get_PictureType_Proxy( 
    ISmsDataPicture __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsDataPicture_get_PictureType_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsDataPicture_put_PictureType_Proxy( 
    ISmsDataPicture __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB ISmsDataPicture_put_PictureType_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDataPicture_get_BitmapFile_Proxy( 
    ISmsDataPicture __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsDataPicture_get_BitmapFile_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsDataPicture_put_BitmapFile_Proxy( 
    ISmsDataPicture __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsDataPicture_put_BitmapFile_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDataPicture_get_CountryCode_Proxy( 
    ISmsDataPicture __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsDataPicture_get_CountryCode_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsDataPicture_put_CountryCode_Proxy( 
    ISmsDataPicture __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB ISmsDataPicture_put_CountryCode_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDataPicture_get_NetworkCode_Proxy( 
    ISmsDataPicture __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsDataPicture_get_NetworkCode_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsDataPicture_put_NetworkCode_Proxy( 
    ISmsDataPicture __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB ISmsDataPicture_put_NetworkCode_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDataPicture_get_Text_Proxy( 
    ISmsDataPicture __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsDataPicture_get_Text_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsDataPicture_put_Text_Proxy( 
    ISmsDataPicture __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsDataPicture_put_Text_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDataPicture_get_EncodedMessage_Proxy( 
    ISmsDataPicture __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsDataPicture_get_EncodedMessage_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsDataPicture_Encode_Proxy( 
    ISmsDataPicture __RPC_FAR * This);


void __RPC_STUB ISmsDataPicture_Encode_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);



#endif 	/* __ISmsDataPicture_INTERFACE_DEFINED__ */


#ifndef __ISmsDataWapBookmark_INTERFACE_DEFINED__
#define __ISmsDataWapBookmark_INTERFACE_DEFINED__

/* interface ISmsDataWapBookmark */
/* [unique][helpstring][dual][uuid][object] */ 


EXTERN_C const IID IID_ISmsDataWapBookmark;

#if defined(__cplusplus) && !defined(CINTERFACE)
    
    MIDL_INTERFACE("97288A28-A8CE-4175-8E0B-75F0AEF9E489")
    ISmsDataWapBookmark : public IDispatch
    {
    public:
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_LastError( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Version( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Build( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ExpirationDate( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_Reserved( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_DistributionID( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_DistributionKey( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE Clear( void) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE GetErrorDescription( 
            LONG newVal,
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE Activate( 
            BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Description( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_Description( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_URL( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_URL( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_EncodedMessage( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE Encode( void) = 0;
        
    };
    
#else 	/* C style interface */

    typedef struct ISmsDataWapBookmarkVtbl
    {
        BEGIN_INTERFACE
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *QueryInterface )( 
            ISmsDataWapBookmark __RPC_FAR * This,
            /* [in] */ REFIID riid,
            /* [iid_is][out] */ void __RPC_FAR *__RPC_FAR *ppvObject);
        
        ULONG ( STDMETHODCALLTYPE __RPC_FAR *AddRef )( 
            ISmsDataWapBookmark __RPC_FAR * This);
        
        ULONG ( STDMETHODCALLTYPE __RPC_FAR *Release )( 
            ISmsDataWapBookmark __RPC_FAR * This);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetTypeInfoCount )( 
            ISmsDataWapBookmark __RPC_FAR * This,
            /* [out] */ UINT __RPC_FAR *pctinfo);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetTypeInfo )( 
            ISmsDataWapBookmark __RPC_FAR * This,
            /* [in] */ UINT iTInfo,
            /* [in] */ LCID lcid,
            /* [out] */ ITypeInfo __RPC_FAR *__RPC_FAR *ppTInfo);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetIDsOfNames )( 
            ISmsDataWapBookmark __RPC_FAR * This,
            /* [in] */ REFIID riid,
            /* [size_is][in] */ LPOLESTR __RPC_FAR *rgszNames,
            /* [in] */ UINT cNames,
            /* [in] */ LCID lcid,
            /* [size_is][out] */ DISPID __RPC_FAR *rgDispId);
        
        /* [local] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Invoke )( 
            ISmsDataWapBookmark __RPC_FAR * This,
            /* [in] */ DISPID dispIdMember,
            /* [in] */ REFIID riid,
            /* [in] */ LCID lcid,
            /* [in] */ WORD wFlags,
            /* [out][in] */ DISPPARAMS __RPC_FAR *pDispParams,
            /* [out] */ VARIANT __RPC_FAR *pVarResult,
            /* [out] */ EXCEPINFO __RPC_FAR *pExcepInfo,
            /* [out] */ UINT __RPC_FAR *puArgErr);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_LastError )( 
            ISmsDataWapBookmark __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Version )( 
            ISmsDataWapBookmark __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Build )( 
            ISmsDataWapBookmark __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ExpirationDate )( 
            ISmsDataWapBookmark __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_Reserved )( 
            ISmsDataWapBookmark __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_DistributionID )( 
            ISmsDataWapBookmark __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_DistributionKey )( 
            ISmsDataWapBookmark __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Clear )( 
            ISmsDataWapBookmark __RPC_FAR * This);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetErrorDescription )( 
            ISmsDataWapBookmark __RPC_FAR * This,
            LONG newVal,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Activate )( 
            ISmsDataWapBookmark __RPC_FAR * This,
            BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Description )( 
            ISmsDataWapBookmark __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_Description )( 
            ISmsDataWapBookmark __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_URL )( 
            ISmsDataWapBookmark __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_URL )( 
            ISmsDataWapBookmark __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_EncodedMessage )( 
            ISmsDataWapBookmark __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Encode )( 
            ISmsDataWapBookmark __RPC_FAR * This);
        
        END_INTERFACE
    } ISmsDataWapBookmarkVtbl;

    interface ISmsDataWapBookmark
    {
        CONST_VTBL struct ISmsDataWapBookmarkVtbl __RPC_FAR *lpVtbl;
    };

    

#ifdef COBJMACROS


#define ISmsDataWapBookmark_QueryInterface(This,riid,ppvObject)	\
    (This)->lpVtbl -> QueryInterface(This,riid,ppvObject)

#define ISmsDataWapBookmark_AddRef(This)	\
    (This)->lpVtbl -> AddRef(This)

#define ISmsDataWapBookmark_Release(This)	\
    (This)->lpVtbl -> Release(This)


#define ISmsDataWapBookmark_GetTypeInfoCount(This,pctinfo)	\
    (This)->lpVtbl -> GetTypeInfoCount(This,pctinfo)

#define ISmsDataWapBookmark_GetTypeInfo(This,iTInfo,lcid,ppTInfo)	\
    (This)->lpVtbl -> GetTypeInfo(This,iTInfo,lcid,ppTInfo)

#define ISmsDataWapBookmark_GetIDsOfNames(This,riid,rgszNames,cNames,lcid,rgDispId)	\
    (This)->lpVtbl -> GetIDsOfNames(This,riid,rgszNames,cNames,lcid,rgDispId)

#define ISmsDataWapBookmark_Invoke(This,dispIdMember,riid,lcid,wFlags,pDispParams,pVarResult,pExcepInfo,puArgErr)	\
    (This)->lpVtbl -> Invoke(This,dispIdMember,riid,lcid,wFlags,pDispParams,pVarResult,pExcepInfo,puArgErr)


#define ISmsDataWapBookmark_get_LastError(This,pVal)	\
    (This)->lpVtbl -> get_LastError(This,pVal)

#define ISmsDataWapBookmark_get_Version(This,pVal)	\
    (This)->lpVtbl -> get_Version(This,pVal)

#define ISmsDataWapBookmark_get_Build(This,pVal)	\
    (This)->lpVtbl -> get_Build(This,pVal)

#define ISmsDataWapBookmark_get_ExpirationDate(This,pVal)	\
    (This)->lpVtbl -> get_ExpirationDate(This,pVal)

#define ISmsDataWapBookmark_put_Reserved(This,newVal)	\
    (This)->lpVtbl -> put_Reserved(This,newVal)

#define ISmsDataWapBookmark_put_DistributionID(This,newVal)	\
    (This)->lpVtbl -> put_DistributionID(This,newVal)

#define ISmsDataWapBookmark_put_DistributionKey(This,newVal)	\
    (This)->lpVtbl -> put_DistributionKey(This,newVal)

#define ISmsDataWapBookmark_Clear(This)	\
    (This)->lpVtbl -> Clear(This)

#define ISmsDataWapBookmark_GetErrorDescription(This,newVal,pVal)	\
    (This)->lpVtbl -> GetErrorDescription(This,newVal,pVal)

#define ISmsDataWapBookmark_Activate(This,newVal)	\
    (This)->lpVtbl -> Activate(This,newVal)

#define ISmsDataWapBookmark_get_Description(This,pVal)	\
    (This)->lpVtbl -> get_Description(This,pVal)

#define ISmsDataWapBookmark_put_Description(This,newVal)	\
    (This)->lpVtbl -> put_Description(This,newVal)

#define ISmsDataWapBookmark_get_URL(This,pVal)	\
    (This)->lpVtbl -> get_URL(This,pVal)

#define ISmsDataWapBookmark_put_URL(This,newVal)	\
    (This)->lpVtbl -> put_URL(This,newVal)

#define ISmsDataWapBookmark_get_EncodedMessage(This,pVal)	\
    (This)->lpVtbl -> get_EncodedMessage(This,pVal)

#define ISmsDataWapBookmark_Encode(This)	\
    (This)->lpVtbl -> Encode(This)

#endif /* COBJMACROS */


#endif 	/* C style interface */



/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDataWapBookmark_get_LastError_Proxy( 
    ISmsDataWapBookmark __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsDataWapBookmark_get_LastError_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDataWapBookmark_get_Version_Proxy( 
    ISmsDataWapBookmark __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsDataWapBookmark_get_Version_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDataWapBookmark_get_Build_Proxy( 
    ISmsDataWapBookmark __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsDataWapBookmark_get_Build_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDataWapBookmark_get_ExpirationDate_Proxy( 
    ISmsDataWapBookmark __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsDataWapBookmark_get_ExpirationDate_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsDataWapBookmark_put_Reserved_Proxy( 
    ISmsDataWapBookmark __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB ISmsDataWapBookmark_put_Reserved_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsDataWapBookmark_put_DistributionID_Proxy( 
    ISmsDataWapBookmark __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsDataWapBookmark_put_DistributionID_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsDataWapBookmark_put_DistributionKey_Proxy( 
    ISmsDataWapBookmark __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsDataWapBookmark_put_DistributionKey_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsDataWapBookmark_Clear_Proxy( 
    ISmsDataWapBookmark __RPC_FAR * This);


void __RPC_STUB ISmsDataWapBookmark_Clear_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsDataWapBookmark_GetErrorDescription_Proxy( 
    ISmsDataWapBookmark __RPC_FAR * This,
    LONG newVal,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsDataWapBookmark_GetErrorDescription_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsDataWapBookmark_Activate_Proxy( 
    ISmsDataWapBookmark __RPC_FAR * This,
    BSTR newVal);


void __RPC_STUB ISmsDataWapBookmark_Activate_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDataWapBookmark_get_Description_Proxy( 
    ISmsDataWapBookmark __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsDataWapBookmark_get_Description_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsDataWapBookmark_put_Description_Proxy( 
    ISmsDataWapBookmark __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsDataWapBookmark_put_Description_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDataWapBookmark_get_URL_Proxy( 
    ISmsDataWapBookmark __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsDataWapBookmark_get_URL_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsDataWapBookmark_put_URL_Proxy( 
    ISmsDataWapBookmark __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsDataWapBookmark_put_URL_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDataWapBookmark_get_EncodedMessage_Proxy( 
    ISmsDataWapBookmark __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsDataWapBookmark_get_EncodedMessage_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsDataWapBookmark_Encode_Proxy( 
    ISmsDataWapBookmark __RPC_FAR * This);


void __RPC_STUB ISmsDataWapBookmark_Encode_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);



#endif 	/* __ISmsDataWapBookmark_INTERFACE_DEFINED__ */


#ifndef __ISmsDataWapPush_INTERFACE_DEFINED__
#define __ISmsDataWapPush_INTERFACE_DEFINED__

/* interface ISmsDataWapPush */
/* [unique][helpstring][dual][uuid][object] */ 


EXTERN_C const IID IID_ISmsDataWapPush;

#if defined(__cplusplus) && !defined(CINTERFACE)
    
    MIDL_INTERFACE("51052D1C-80F1-4FCE-A458-A1CD8BA753CA")
    ISmsDataWapPush : public IDispatch
    {
    public:
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_LastError( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Version( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Build( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ExpirationDate( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_Reserved( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_DistributionID( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_DistributionKey( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE Clear( void) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE GetErrorDescription( 
            LONG newVal,
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE Activate( 
            BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_SignalReference( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_SignalReference( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_SignalAction( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_SignalAction( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Description( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_Description( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_URL( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_URL( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ConnectionType( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_ConnectionType( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ExecuteAction( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_ExecuteAction( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_EncodedMessage( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE Encode( void) = 0;
        
    };
    
#else 	/* C style interface */

    typedef struct ISmsDataWapPushVtbl
    {
        BEGIN_INTERFACE
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *QueryInterface )( 
            ISmsDataWapPush __RPC_FAR * This,
            /* [in] */ REFIID riid,
            /* [iid_is][out] */ void __RPC_FAR *__RPC_FAR *ppvObject);
        
        ULONG ( STDMETHODCALLTYPE __RPC_FAR *AddRef )( 
            ISmsDataWapPush __RPC_FAR * This);
        
        ULONG ( STDMETHODCALLTYPE __RPC_FAR *Release )( 
            ISmsDataWapPush __RPC_FAR * This);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetTypeInfoCount )( 
            ISmsDataWapPush __RPC_FAR * This,
            /* [out] */ UINT __RPC_FAR *pctinfo);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetTypeInfo )( 
            ISmsDataWapPush __RPC_FAR * This,
            /* [in] */ UINT iTInfo,
            /* [in] */ LCID lcid,
            /* [out] */ ITypeInfo __RPC_FAR *__RPC_FAR *ppTInfo);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetIDsOfNames )( 
            ISmsDataWapPush __RPC_FAR * This,
            /* [in] */ REFIID riid,
            /* [size_is][in] */ LPOLESTR __RPC_FAR *rgszNames,
            /* [in] */ UINT cNames,
            /* [in] */ LCID lcid,
            /* [size_is][out] */ DISPID __RPC_FAR *rgDispId);
        
        /* [local] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Invoke )( 
            ISmsDataWapPush __RPC_FAR * This,
            /* [in] */ DISPID dispIdMember,
            /* [in] */ REFIID riid,
            /* [in] */ LCID lcid,
            /* [in] */ WORD wFlags,
            /* [out][in] */ DISPPARAMS __RPC_FAR *pDispParams,
            /* [out] */ VARIANT __RPC_FAR *pVarResult,
            /* [out] */ EXCEPINFO __RPC_FAR *pExcepInfo,
            /* [out] */ UINT __RPC_FAR *puArgErr);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_LastError )( 
            ISmsDataWapPush __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Version )( 
            ISmsDataWapPush __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Build )( 
            ISmsDataWapPush __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ExpirationDate )( 
            ISmsDataWapPush __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_Reserved )( 
            ISmsDataWapPush __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_DistributionID )( 
            ISmsDataWapPush __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_DistributionKey )( 
            ISmsDataWapPush __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Clear )( 
            ISmsDataWapPush __RPC_FAR * This);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetErrorDescription )( 
            ISmsDataWapPush __RPC_FAR * This,
            LONG newVal,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Activate )( 
            ISmsDataWapPush __RPC_FAR * This,
            BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_SignalReference )( 
            ISmsDataWapPush __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_SignalReference )( 
            ISmsDataWapPush __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_SignalAction )( 
            ISmsDataWapPush __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_SignalAction )( 
            ISmsDataWapPush __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Description )( 
            ISmsDataWapPush __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_Description )( 
            ISmsDataWapPush __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_URL )( 
            ISmsDataWapPush __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_URL )( 
            ISmsDataWapPush __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ConnectionType )( 
            ISmsDataWapPush __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_ConnectionType )( 
            ISmsDataWapPush __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ExecuteAction )( 
            ISmsDataWapPush __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_ExecuteAction )( 
            ISmsDataWapPush __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_EncodedMessage )( 
            ISmsDataWapPush __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Encode )( 
            ISmsDataWapPush __RPC_FAR * This);
        
        END_INTERFACE
    } ISmsDataWapPushVtbl;

    interface ISmsDataWapPush
    {
        CONST_VTBL struct ISmsDataWapPushVtbl __RPC_FAR *lpVtbl;
    };

    

#ifdef COBJMACROS


#define ISmsDataWapPush_QueryInterface(This,riid,ppvObject)	\
    (This)->lpVtbl -> QueryInterface(This,riid,ppvObject)

#define ISmsDataWapPush_AddRef(This)	\
    (This)->lpVtbl -> AddRef(This)

#define ISmsDataWapPush_Release(This)	\
    (This)->lpVtbl -> Release(This)


#define ISmsDataWapPush_GetTypeInfoCount(This,pctinfo)	\
    (This)->lpVtbl -> GetTypeInfoCount(This,pctinfo)

#define ISmsDataWapPush_GetTypeInfo(This,iTInfo,lcid,ppTInfo)	\
    (This)->lpVtbl -> GetTypeInfo(This,iTInfo,lcid,ppTInfo)

#define ISmsDataWapPush_GetIDsOfNames(This,riid,rgszNames,cNames,lcid,rgDispId)	\
    (This)->lpVtbl -> GetIDsOfNames(This,riid,rgszNames,cNames,lcid,rgDispId)

#define ISmsDataWapPush_Invoke(This,dispIdMember,riid,lcid,wFlags,pDispParams,pVarResult,pExcepInfo,puArgErr)	\
    (This)->lpVtbl -> Invoke(This,dispIdMember,riid,lcid,wFlags,pDispParams,pVarResult,pExcepInfo,puArgErr)


#define ISmsDataWapPush_get_LastError(This,pVal)	\
    (This)->lpVtbl -> get_LastError(This,pVal)

#define ISmsDataWapPush_get_Version(This,pVal)	\
    (This)->lpVtbl -> get_Version(This,pVal)

#define ISmsDataWapPush_get_Build(This,pVal)	\
    (This)->lpVtbl -> get_Build(This,pVal)

#define ISmsDataWapPush_get_ExpirationDate(This,pVal)	\
    (This)->lpVtbl -> get_ExpirationDate(This,pVal)

#define ISmsDataWapPush_put_Reserved(This,newVal)	\
    (This)->lpVtbl -> put_Reserved(This,newVal)

#define ISmsDataWapPush_put_DistributionID(This,newVal)	\
    (This)->lpVtbl -> put_DistributionID(This,newVal)

#define ISmsDataWapPush_put_DistributionKey(This,newVal)	\
    (This)->lpVtbl -> put_DistributionKey(This,newVal)

#define ISmsDataWapPush_Clear(This)	\
    (This)->lpVtbl -> Clear(This)

#define ISmsDataWapPush_GetErrorDescription(This,newVal,pVal)	\
    (This)->lpVtbl -> GetErrorDescription(This,newVal,pVal)

#define ISmsDataWapPush_Activate(This,newVal)	\
    (This)->lpVtbl -> Activate(This,newVal)

#define ISmsDataWapPush_get_SignalReference(This,pVal)	\
    (This)->lpVtbl -> get_SignalReference(This,pVal)

#define ISmsDataWapPush_put_SignalReference(This,newVal)	\
    (This)->lpVtbl -> put_SignalReference(This,newVal)

#define ISmsDataWapPush_get_SignalAction(This,pVal)	\
    (This)->lpVtbl -> get_SignalAction(This,pVal)

#define ISmsDataWapPush_put_SignalAction(This,newVal)	\
    (This)->lpVtbl -> put_SignalAction(This,newVal)

#define ISmsDataWapPush_get_Description(This,pVal)	\
    (This)->lpVtbl -> get_Description(This,pVal)

#define ISmsDataWapPush_put_Description(This,newVal)	\
    (This)->lpVtbl -> put_Description(This,newVal)

#define ISmsDataWapPush_get_URL(This,pVal)	\
    (This)->lpVtbl -> get_URL(This,pVal)

#define ISmsDataWapPush_put_URL(This,newVal)	\
    (This)->lpVtbl -> put_URL(This,newVal)

#define ISmsDataWapPush_get_ConnectionType(This,pVal)	\
    (This)->lpVtbl -> get_ConnectionType(This,pVal)

#define ISmsDataWapPush_put_ConnectionType(This,newVal)	\
    (This)->lpVtbl -> put_ConnectionType(This,newVal)

#define ISmsDataWapPush_get_ExecuteAction(This,pVal)	\
    (This)->lpVtbl -> get_ExecuteAction(This,pVal)

#define ISmsDataWapPush_put_ExecuteAction(This,newVal)	\
    (This)->lpVtbl -> put_ExecuteAction(This,newVal)

#define ISmsDataWapPush_get_EncodedMessage(This,pVal)	\
    (This)->lpVtbl -> get_EncodedMessage(This,pVal)

#define ISmsDataWapPush_Encode(This)	\
    (This)->lpVtbl -> Encode(This)

#endif /* COBJMACROS */


#endif 	/* C style interface */



/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDataWapPush_get_LastError_Proxy( 
    ISmsDataWapPush __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsDataWapPush_get_LastError_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDataWapPush_get_Version_Proxy( 
    ISmsDataWapPush __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsDataWapPush_get_Version_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDataWapPush_get_Build_Proxy( 
    ISmsDataWapPush __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsDataWapPush_get_Build_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDataWapPush_get_ExpirationDate_Proxy( 
    ISmsDataWapPush __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsDataWapPush_get_ExpirationDate_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsDataWapPush_put_Reserved_Proxy( 
    ISmsDataWapPush __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB ISmsDataWapPush_put_Reserved_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsDataWapPush_put_DistributionID_Proxy( 
    ISmsDataWapPush __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsDataWapPush_put_DistributionID_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsDataWapPush_put_DistributionKey_Proxy( 
    ISmsDataWapPush __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsDataWapPush_put_DistributionKey_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsDataWapPush_Clear_Proxy( 
    ISmsDataWapPush __RPC_FAR * This);


void __RPC_STUB ISmsDataWapPush_Clear_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsDataWapPush_GetErrorDescription_Proxy( 
    ISmsDataWapPush __RPC_FAR * This,
    LONG newVal,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsDataWapPush_GetErrorDescription_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsDataWapPush_Activate_Proxy( 
    ISmsDataWapPush __RPC_FAR * This,
    BSTR newVal);


void __RPC_STUB ISmsDataWapPush_Activate_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDataWapPush_get_SignalReference_Proxy( 
    ISmsDataWapPush __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsDataWapPush_get_SignalReference_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsDataWapPush_put_SignalReference_Proxy( 
    ISmsDataWapPush __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsDataWapPush_put_SignalReference_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDataWapPush_get_SignalAction_Proxy( 
    ISmsDataWapPush __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsDataWapPush_get_SignalAction_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsDataWapPush_put_SignalAction_Proxy( 
    ISmsDataWapPush __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB ISmsDataWapPush_put_SignalAction_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDataWapPush_get_Description_Proxy( 
    ISmsDataWapPush __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsDataWapPush_get_Description_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsDataWapPush_put_Description_Proxy( 
    ISmsDataWapPush __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsDataWapPush_put_Description_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDataWapPush_get_URL_Proxy( 
    ISmsDataWapPush __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsDataWapPush_get_URL_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsDataWapPush_put_URL_Proxy( 
    ISmsDataWapPush __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsDataWapPush_put_URL_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDataWapPush_get_ConnectionType_Proxy( 
    ISmsDataWapPush __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsDataWapPush_get_ConnectionType_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsDataWapPush_put_ConnectionType_Proxy( 
    ISmsDataWapPush __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB ISmsDataWapPush_put_ConnectionType_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDataWapPush_get_ExecuteAction_Proxy( 
    ISmsDataWapPush __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsDataWapPush_get_ExecuteAction_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsDataWapPush_put_ExecuteAction_Proxy( 
    ISmsDataWapPush __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB ISmsDataWapPush_put_ExecuteAction_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDataWapPush_get_EncodedMessage_Proxy( 
    ISmsDataWapPush __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsDataWapPush_get_EncodedMessage_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsDataWapPush_Encode_Proxy( 
    ISmsDataWapPush __RPC_FAR * This);


void __RPC_STUB ISmsDataWapPush_Encode_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);



#endif 	/* __ISmsDataWapPush_INTERFACE_DEFINED__ */


#ifndef __ISmsDeliveryStatus_INTERFACE_DEFINED__
#define __ISmsDeliveryStatus_INTERFACE_DEFINED__

/* interface ISmsDeliveryStatus */
/* [unique][helpstring][dual][uuid][object] */ 


EXTERN_C const IID IID_ISmsDeliveryStatus;

#if defined(__cplusplus) && !defined(CINTERFACE)
    
    MIDL_INTERFACE("DF9718BC-DDEC-44C7-B2E0-F9046E840AF7")
    ISmsDeliveryStatus : public IDispatch
    {
    public:
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Status( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_Status( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_StatusCode( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_StatusCode( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_StatusCompletedTime( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_StatusCompletedTime( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_StatusCompletedTimeSecs( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_StatusCompletedTimeSecs( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_IsCompleted( 
            /* [retval][out] */ BOOL __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_IsCompleted( 
            /* [in] */ BOOL newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_StatusDescription( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
    };
    
#else 	/* C style interface */

    typedef struct ISmsDeliveryStatusVtbl
    {
        BEGIN_INTERFACE
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *QueryInterface )( 
            ISmsDeliveryStatus __RPC_FAR * This,
            /* [in] */ REFIID riid,
            /* [iid_is][out] */ void __RPC_FAR *__RPC_FAR *ppvObject);
        
        ULONG ( STDMETHODCALLTYPE __RPC_FAR *AddRef )( 
            ISmsDeliveryStatus __RPC_FAR * This);
        
        ULONG ( STDMETHODCALLTYPE __RPC_FAR *Release )( 
            ISmsDeliveryStatus __RPC_FAR * This);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetTypeInfoCount )( 
            ISmsDeliveryStatus __RPC_FAR * This,
            /* [out] */ UINT __RPC_FAR *pctinfo);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetTypeInfo )( 
            ISmsDeliveryStatus __RPC_FAR * This,
            /* [in] */ UINT iTInfo,
            /* [in] */ LCID lcid,
            /* [out] */ ITypeInfo __RPC_FAR *__RPC_FAR *ppTInfo);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetIDsOfNames )( 
            ISmsDeliveryStatus __RPC_FAR * This,
            /* [in] */ REFIID riid,
            /* [size_is][in] */ LPOLESTR __RPC_FAR *rgszNames,
            /* [in] */ UINT cNames,
            /* [in] */ LCID lcid,
            /* [size_is][out] */ DISPID __RPC_FAR *rgDispId);
        
        /* [local] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Invoke )( 
            ISmsDeliveryStatus __RPC_FAR * This,
            /* [in] */ DISPID dispIdMember,
            /* [in] */ REFIID riid,
            /* [in] */ LCID lcid,
            /* [in] */ WORD wFlags,
            /* [out][in] */ DISPPARAMS __RPC_FAR *pDispParams,
            /* [out] */ VARIANT __RPC_FAR *pVarResult,
            /* [out] */ EXCEPINFO __RPC_FAR *pExcepInfo,
            /* [out] */ UINT __RPC_FAR *puArgErr);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Status )( 
            ISmsDeliveryStatus __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_Status )( 
            ISmsDeliveryStatus __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_StatusCode )( 
            ISmsDeliveryStatus __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_StatusCode )( 
            ISmsDeliveryStatus __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_StatusCompletedTime )( 
            ISmsDeliveryStatus __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_StatusCompletedTime )( 
            ISmsDeliveryStatus __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_StatusCompletedTimeSecs )( 
            ISmsDeliveryStatus __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_StatusCompletedTimeSecs )( 
            ISmsDeliveryStatus __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_IsCompleted )( 
            ISmsDeliveryStatus __RPC_FAR * This,
            /* [retval][out] */ BOOL __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_IsCompleted )( 
            ISmsDeliveryStatus __RPC_FAR * This,
            /* [in] */ BOOL newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_StatusDescription )( 
            ISmsDeliveryStatus __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        END_INTERFACE
    } ISmsDeliveryStatusVtbl;

    interface ISmsDeliveryStatus
    {
        CONST_VTBL struct ISmsDeliveryStatusVtbl __RPC_FAR *lpVtbl;
    };

    

#ifdef COBJMACROS


#define ISmsDeliveryStatus_QueryInterface(This,riid,ppvObject)	\
    (This)->lpVtbl -> QueryInterface(This,riid,ppvObject)

#define ISmsDeliveryStatus_AddRef(This)	\
    (This)->lpVtbl -> AddRef(This)

#define ISmsDeliveryStatus_Release(This)	\
    (This)->lpVtbl -> Release(This)


#define ISmsDeliveryStatus_GetTypeInfoCount(This,pctinfo)	\
    (This)->lpVtbl -> GetTypeInfoCount(This,pctinfo)

#define ISmsDeliveryStatus_GetTypeInfo(This,iTInfo,lcid,ppTInfo)	\
    (This)->lpVtbl -> GetTypeInfo(This,iTInfo,lcid,ppTInfo)

#define ISmsDeliveryStatus_GetIDsOfNames(This,riid,rgszNames,cNames,lcid,rgDispId)	\
    (This)->lpVtbl -> GetIDsOfNames(This,riid,rgszNames,cNames,lcid,rgDispId)

#define ISmsDeliveryStatus_Invoke(This,dispIdMember,riid,lcid,wFlags,pDispParams,pVarResult,pExcepInfo,puArgErr)	\
    (This)->lpVtbl -> Invoke(This,dispIdMember,riid,lcid,wFlags,pDispParams,pVarResult,pExcepInfo,puArgErr)


#define ISmsDeliveryStatus_get_Status(This,pVal)	\
    (This)->lpVtbl -> get_Status(This,pVal)

#define ISmsDeliveryStatus_put_Status(This,newVal)	\
    (This)->lpVtbl -> put_Status(This,newVal)

#define ISmsDeliveryStatus_get_StatusCode(This,pVal)	\
    (This)->lpVtbl -> get_StatusCode(This,pVal)

#define ISmsDeliveryStatus_put_StatusCode(This,newVal)	\
    (This)->lpVtbl -> put_StatusCode(This,newVal)

#define ISmsDeliveryStatus_get_StatusCompletedTime(This,pVal)	\
    (This)->lpVtbl -> get_StatusCompletedTime(This,pVal)

#define ISmsDeliveryStatus_put_StatusCompletedTime(This,newVal)	\
    (This)->lpVtbl -> put_StatusCompletedTime(This,newVal)

#define ISmsDeliveryStatus_get_StatusCompletedTimeSecs(This,pVal)	\
    (This)->lpVtbl -> get_StatusCompletedTimeSecs(This,pVal)

#define ISmsDeliveryStatus_put_StatusCompletedTimeSecs(This,newVal)	\
    (This)->lpVtbl -> put_StatusCompletedTimeSecs(This,newVal)

#define ISmsDeliveryStatus_get_IsCompleted(This,pVal)	\
    (This)->lpVtbl -> get_IsCompleted(This,pVal)

#define ISmsDeliveryStatus_put_IsCompleted(This,newVal)	\
    (This)->lpVtbl -> put_IsCompleted(This,newVal)

#define ISmsDeliveryStatus_get_StatusDescription(This,pVal)	\
    (This)->lpVtbl -> get_StatusDescription(This,pVal)

#endif /* COBJMACROS */


#endif 	/* C style interface */



/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDeliveryStatus_get_Status_Proxy( 
    ISmsDeliveryStatus __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsDeliveryStatus_get_Status_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsDeliveryStatus_put_Status_Proxy( 
    ISmsDeliveryStatus __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB ISmsDeliveryStatus_put_Status_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDeliveryStatus_get_StatusCode_Proxy( 
    ISmsDeliveryStatus __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsDeliveryStatus_get_StatusCode_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsDeliveryStatus_put_StatusCode_Proxy( 
    ISmsDeliveryStatus __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB ISmsDeliveryStatus_put_StatusCode_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDeliveryStatus_get_StatusCompletedTime_Proxy( 
    ISmsDeliveryStatus __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsDeliveryStatus_get_StatusCompletedTime_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsDeliveryStatus_put_StatusCompletedTime_Proxy( 
    ISmsDeliveryStatus __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsDeliveryStatus_put_StatusCompletedTime_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDeliveryStatus_get_StatusCompletedTimeSecs_Proxy( 
    ISmsDeliveryStatus __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsDeliveryStatus_get_StatusCompletedTimeSecs_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsDeliveryStatus_put_StatusCompletedTimeSecs_Proxy( 
    ISmsDeliveryStatus __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB ISmsDeliveryStatus_put_StatusCompletedTimeSecs_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDeliveryStatus_get_IsCompleted_Proxy( 
    ISmsDeliveryStatus __RPC_FAR * This,
    /* [retval][out] */ BOOL __RPC_FAR *pVal);


void __RPC_STUB ISmsDeliveryStatus_get_IsCompleted_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsDeliveryStatus_put_IsCompleted_Proxy( 
    ISmsDeliveryStatus __RPC_FAR * This,
    /* [in] */ BOOL newVal);


void __RPC_STUB ISmsDeliveryStatus_put_IsCompleted_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDeliveryStatus_get_StatusDescription_Proxy( 
    ISmsDeliveryStatus __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsDeliveryStatus_get_StatusDescription_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);



#endif 	/* __ISmsDeliveryStatus_INTERFACE_DEFINED__ */


#ifndef __IPagerMessage_INTERFACE_DEFINED__
#define __IPagerMessage_INTERFACE_DEFINED__

/* interface IPagerMessage */
/* [unique][helpstring][dual][uuid][object] */ 


EXTERN_C const IID IID_IPagerMessage;

#if defined(__cplusplus) && !defined(CINTERFACE)
    
    MIDL_INTERFACE("990F731B-B2A8-45B8-9E39-8DF6FA8B85C1")
    IPagerMessage : public IDispatch
    {
    public:
        virtual /* [helpstring][id] */ HRESULT STDMETHODCALLTYPE Clear( void) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Recipient( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_Recipient( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Data( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_Data( 
            /* [in] */ BSTR newVal) = 0;
        
    };
    
#else 	/* C style interface */

    typedef struct IPagerMessageVtbl
    {
        BEGIN_INTERFACE
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *QueryInterface )( 
            IPagerMessage __RPC_FAR * This,
            /* [in] */ REFIID riid,
            /* [iid_is][out] */ void __RPC_FAR *__RPC_FAR *ppvObject);
        
        ULONG ( STDMETHODCALLTYPE __RPC_FAR *AddRef )( 
            IPagerMessage __RPC_FAR * This);
        
        ULONG ( STDMETHODCALLTYPE __RPC_FAR *Release )( 
            IPagerMessage __RPC_FAR * This);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetTypeInfoCount )( 
            IPagerMessage __RPC_FAR * This,
            /* [out] */ UINT __RPC_FAR *pctinfo);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetTypeInfo )( 
            IPagerMessage __RPC_FAR * This,
            /* [in] */ UINT iTInfo,
            /* [in] */ LCID lcid,
            /* [out] */ ITypeInfo __RPC_FAR *__RPC_FAR *ppTInfo);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetIDsOfNames )( 
            IPagerMessage __RPC_FAR * This,
            /* [in] */ REFIID riid,
            /* [size_is][in] */ LPOLESTR __RPC_FAR *rgszNames,
            /* [in] */ UINT cNames,
            /* [in] */ LCID lcid,
            /* [size_is][out] */ DISPID __RPC_FAR *rgDispId);
        
        /* [local] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Invoke )( 
            IPagerMessage __RPC_FAR * This,
            /* [in] */ DISPID dispIdMember,
            /* [in] */ REFIID riid,
            /* [in] */ LCID lcid,
            /* [in] */ WORD wFlags,
            /* [out][in] */ DISPPARAMS __RPC_FAR *pDispParams,
            /* [out] */ VARIANT __RPC_FAR *pVarResult,
            /* [out] */ EXCEPINFO __RPC_FAR *pExcepInfo,
            /* [out] */ UINT __RPC_FAR *puArgErr);
        
        /* [helpstring][id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Clear )( 
            IPagerMessage __RPC_FAR * This);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Recipient )( 
            IPagerMessage __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_Recipient )( 
            IPagerMessage __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Data )( 
            IPagerMessage __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_Data )( 
            IPagerMessage __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        END_INTERFACE
    } IPagerMessageVtbl;

    interface IPagerMessage
    {
        CONST_VTBL struct IPagerMessageVtbl __RPC_FAR *lpVtbl;
    };

    

#ifdef COBJMACROS


#define IPagerMessage_QueryInterface(This,riid,ppvObject)	\
    (This)->lpVtbl -> QueryInterface(This,riid,ppvObject)

#define IPagerMessage_AddRef(This)	\
    (This)->lpVtbl -> AddRef(This)

#define IPagerMessage_Release(This)	\
    (This)->lpVtbl -> Release(This)


#define IPagerMessage_GetTypeInfoCount(This,pctinfo)	\
    (This)->lpVtbl -> GetTypeInfoCount(This,pctinfo)

#define IPagerMessage_GetTypeInfo(This,iTInfo,lcid,ppTInfo)	\
    (This)->lpVtbl -> GetTypeInfo(This,iTInfo,lcid,ppTInfo)

#define IPagerMessage_GetIDsOfNames(This,riid,rgszNames,cNames,lcid,rgDispId)	\
    (This)->lpVtbl -> GetIDsOfNames(This,riid,rgszNames,cNames,lcid,rgDispId)

#define IPagerMessage_Invoke(This,dispIdMember,riid,lcid,wFlags,pDispParams,pVarResult,pExcepInfo,puArgErr)	\
    (This)->lpVtbl -> Invoke(This,dispIdMember,riid,lcid,wFlags,pDispParams,pVarResult,pExcepInfo,puArgErr)


#define IPagerMessage_Clear(This)	\
    (This)->lpVtbl -> Clear(This)

#define IPagerMessage_get_Recipient(This,pVal)	\
    (This)->lpVtbl -> get_Recipient(This,pVal)

#define IPagerMessage_put_Recipient(This,newVal)	\
    (This)->lpVtbl -> put_Recipient(This,newVal)

#define IPagerMessage_get_Data(This,pVal)	\
    (This)->lpVtbl -> get_Data(This,pVal)

#define IPagerMessage_put_Data(This,newVal)	\
    (This)->lpVtbl -> put_Data(This,newVal)

#endif /* COBJMACROS */


#endif 	/* C style interface */



/* [helpstring][id] */ HRESULT STDMETHODCALLTYPE IPagerMessage_Clear_Proxy( 
    IPagerMessage __RPC_FAR * This);


void __RPC_STUB IPagerMessage_Clear_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IPagerMessage_get_Recipient_Proxy( 
    IPagerMessage __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IPagerMessage_get_Recipient_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IPagerMessage_put_Recipient_Proxy( 
    IPagerMessage __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB IPagerMessage_put_Recipient_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IPagerMessage_get_Data_Proxy( 
    IPagerMessage __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IPagerMessage_get_Data_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IPagerMessage_put_Data_Proxy( 
    IPagerMessage __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB IPagerMessage_put_Data_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);



#endif 	/* __IPagerMessage_INTERFACE_DEFINED__ */


#ifndef __IMmsProtocolMm1_INTERFACE_DEFINED__
#define __IMmsProtocolMm1_INTERFACE_DEFINED__

/* interface IMmsProtocolMm1 */
/* [unique][helpstring][dual][uuid][object] */ 


EXTERN_C const IID IID_IMmsProtocolMm1;

#if defined(__cplusplus) && !defined(CINTERFACE)
    
    MIDL_INTERFACE("1B87BF35-D56F-42A8-8D23-8631953DBA68")
    IMmsProtocolMm1 : public IDispatch
    {
    public:
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_LastError( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Version( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Build( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ExpirationDate( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_Reserved( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_LogFile( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_LogFile( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ActivityFile( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_ActivityFile( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_DistributionID( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_DistributionKey( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE Clear( void) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE GetErrorDescription( 
            LONG newVal,
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE Activate( 
            BSTR newVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_Device( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Device( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ProviderAPN( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_ProviderAPN( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ProviderAPNAccount( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_ProviderAPNAccount( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ProviderAPNPassword( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_ProviderAPNPassword( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ProviderWAPGateway( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_ProviderWAPGateway( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ProviderMMSC( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_ProviderMMSC( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ProviderMessageSizeLimit( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_ProviderMessageSizeLimit( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_AdvancedSettings( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_AdvancedSettings( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ProviderResponse( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_MessageId( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ProvidersFolder( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE Connect( void) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE Disconnect( void) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE Send( 
            VARIANT __RPC_FAR *pVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE GetDeviceCount( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE GetDevice( 
            LONG lDevice,
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE ProviderSaveConfig( 
            BSTR bstrFile) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE ProviderLoadConfig( 
            BSTR bstrFile) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE EnterPin( 
            BSTR bstrPinCode) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE SendCommand( 
            BSTR bstrCommand,
            LONG lTimeout,
            /* [retval][out] */ BSTR __RPC_FAR *pbstrResponse) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE Retrieve( 
            BSTR bstrContentLocation,
            /* [retval][out] */ VARIANT __RPC_FAR *pVal) = 0;
        
        virtual /* [helpstring][id] */ HRESULT STDMETHODCALLTYPE GetFirstMessage( 
            /* [retval][out] */ VARIANT __RPC_FAR *pVal) = 0;
        
        virtual /* [helpstring][id] */ HRESULT STDMETHODCALLTYPE GetNextMessage( 
            /* [retval][out] */ VARIANT __RPC_FAR *pVal) = 0;
        
        virtual /* [helpstring][id] */ HRESULT STDMETHODCALLTYPE Receive( void) = 0;
        
    };
    
#else 	/* C style interface */

    typedef struct IMmsProtocolMm1Vtbl
    {
        BEGIN_INTERFACE
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *QueryInterface )( 
            IMmsProtocolMm1 __RPC_FAR * This,
            /* [in] */ REFIID riid,
            /* [iid_is][out] */ void __RPC_FAR *__RPC_FAR *ppvObject);
        
        ULONG ( STDMETHODCALLTYPE __RPC_FAR *AddRef )( 
            IMmsProtocolMm1 __RPC_FAR * This);
        
        ULONG ( STDMETHODCALLTYPE __RPC_FAR *Release )( 
            IMmsProtocolMm1 __RPC_FAR * This);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetTypeInfoCount )( 
            IMmsProtocolMm1 __RPC_FAR * This,
            /* [out] */ UINT __RPC_FAR *pctinfo);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetTypeInfo )( 
            IMmsProtocolMm1 __RPC_FAR * This,
            /* [in] */ UINT iTInfo,
            /* [in] */ LCID lcid,
            /* [out] */ ITypeInfo __RPC_FAR *__RPC_FAR *ppTInfo);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetIDsOfNames )( 
            IMmsProtocolMm1 __RPC_FAR * This,
            /* [in] */ REFIID riid,
            /* [size_is][in] */ LPOLESTR __RPC_FAR *rgszNames,
            /* [in] */ UINT cNames,
            /* [in] */ LCID lcid,
            /* [size_is][out] */ DISPID __RPC_FAR *rgDispId);
        
        /* [local] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Invoke )( 
            IMmsProtocolMm1 __RPC_FAR * This,
            /* [in] */ DISPID dispIdMember,
            /* [in] */ REFIID riid,
            /* [in] */ LCID lcid,
            /* [in] */ WORD wFlags,
            /* [out][in] */ DISPPARAMS __RPC_FAR *pDispParams,
            /* [out] */ VARIANT __RPC_FAR *pVarResult,
            /* [out] */ EXCEPINFO __RPC_FAR *pExcepInfo,
            /* [out] */ UINT __RPC_FAR *puArgErr);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_LastError )( 
            IMmsProtocolMm1 __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Version )( 
            IMmsProtocolMm1 __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Build )( 
            IMmsProtocolMm1 __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ExpirationDate )( 
            IMmsProtocolMm1 __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_Reserved )( 
            IMmsProtocolMm1 __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_LogFile )( 
            IMmsProtocolMm1 __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_LogFile )( 
            IMmsProtocolMm1 __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ActivityFile )( 
            IMmsProtocolMm1 __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_ActivityFile )( 
            IMmsProtocolMm1 __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_DistributionID )( 
            IMmsProtocolMm1 __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_DistributionKey )( 
            IMmsProtocolMm1 __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Clear )( 
            IMmsProtocolMm1 __RPC_FAR * This);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetErrorDescription )( 
            IMmsProtocolMm1 __RPC_FAR * This,
            LONG newVal,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Activate )( 
            IMmsProtocolMm1 __RPC_FAR * This,
            BSTR newVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_Device )( 
            IMmsProtocolMm1 __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Device )( 
            IMmsProtocolMm1 __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ProviderAPN )( 
            IMmsProtocolMm1 __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_ProviderAPN )( 
            IMmsProtocolMm1 __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ProviderAPNAccount )( 
            IMmsProtocolMm1 __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_ProviderAPNAccount )( 
            IMmsProtocolMm1 __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ProviderAPNPassword )( 
            IMmsProtocolMm1 __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_ProviderAPNPassword )( 
            IMmsProtocolMm1 __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ProviderWAPGateway )( 
            IMmsProtocolMm1 __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_ProviderWAPGateway )( 
            IMmsProtocolMm1 __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ProviderMMSC )( 
            IMmsProtocolMm1 __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_ProviderMMSC )( 
            IMmsProtocolMm1 __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ProviderMessageSizeLimit )( 
            IMmsProtocolMm1 __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_ProviderMessageSizeLimit )( 
            IMmsProtocolMm1 __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_AdvancedSettings )( 
            IMmsProtocolMm1 __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_AdvancedSettings )( 
            IMmsProtocolMm1 __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ProviderResponse )( 
            IMmsProtocolMm1 __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_MessageId )( 
            IMmsProtocolMm1 __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ProvidersFolder )( 
            IMmsProtocolMm1 __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Connect )( 
            IMmsProtocolMm1 __RPC_FAR * This);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Disconnect )( 
            IMmsProtocolMm1 __RPC_FAR * This);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Send )( 
            IMmsProtocolMm1 __RPC_FAR * This,
            VARIANT __RPC_FAR *pVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetDeviceCount )( 
            IMmsProtocolMm1 __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetDevice )( 
            IMmsProtocolMm1 __RPC_FAR * This,
            LONG lDevice,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *ProviderSaveConfig )( 
            IMmsProtocolMm1 __RPC_FAR * This,
            BSTR bstrFile);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *ProviderLoadConfig )( 
            IMmsProtocolMm1 __RPC_FAR * This,
            BSTR bstrFile);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *EnterPin )( 
            IMmsProtocolMm1 __RPC_FAR * This,
            BSTR bstrPinCode);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *SendCommand )( 
            IMmsProtocolMm1 __RPC_FAR * This,
            BSTR bstrCommand,
            LONG lTimeout,
            /* [retval][out] */ BSTR __RPC_FAR *pbstrResponse);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Retrieve )( 
            IMmsProtocolMm1 __RPC_FAR * This,
            BSTR bstrContentLocation,
            /* [retval][out] */ VARIANT __RPC_FAR *pVal);
        
        /* [helpstring][id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetFirstMessage )( 
            IMmsProtocolMm1 __RPC_FAR * This,
            /* [retval][out] */ VARIANT __RPC_FAR *pVal);
        
        /* [helpstring][id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetNextMessage )( 
            IMmsProtocolMm1 __RPC_FAR * This,
            /* [retval][out] */ VARIANT __RPC_FAR *pVal);
        
        /* [helpstring][id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Receive )( 
            IMmsProtocolMm1 __RPC_FAR * This);
        
        END_INTERFACE
    } IMmsProtocolMm1Vtbl;

    interface IMmsProtocolMm1
    {
        CONST_VTBL struct IMmsProtocolMm1Vtbl __RPC_FAR *lpVtbl;
    };

    

#ifdef COBJMACROS


#define IMmsProtocolMm1_QueryInterface(This,riid,ppvObject)	\
    (This)->lpVtbl -> QueryInterface(This,riid,ppvObject)

#define IMmsProtocolMm1_AddRef(This)	\
    (This)->lpVtbl -> AddRef(This)

#define IMmsProtocolMm1_Release(This)	\
    (This)->lpVtbl -> Release(This)


#define IMmsProtocolMm1_GetTypeInfoCount(This,pctinfo)	\
    (This)->lpVtbl -> GetTypeInfoCount(This,pctinfo)

#define IMmsProtocolMm1_GetTypeInfo(This,iTInfo,lcid,ppTInfo)	\
    (This)->lpVtbl -> GetTypeInfo(This,iTInfo,lcid,ppTInfo)

#define IMmsProtocolMm1_GetIDsOfNames(This,riid,rgszNames,cNames,lcid,rgDispId)	\
    (This)->lpVtbl -> GetIDsOfNames(This,riid,rgszNames,cNames,lcid,rgDispId)

#define IMmsProtocolMm1_Invoke(This,dispIdMember,riid,lcid,wFlags,pDispParams,pVarResult,pExcepInfo,puArgErr)	\
    (This)->lpVtbl -> Invoke(This,dispIdMember,riid,lcid,wFlags,pDispParams,pVarResult,pExcepInfo,puArgErr)


#define IMmsProtocolMm1_get_LastError(This,pVal)	\
    (This)->lpVtbl -> get_LastError(This,pVal)

#define IMmsProtocolMm1_get_Version(This,pVal)	\
    (This)->lpVtbl -> get_Version(This,pVal)

#define IMmsProtocolMm1_get_Build(This,pVal)	\
    (This)->lpVtbl -> get_Build(This,pVal)

#define IMmsProtocolMm1_get_ExpirationDate(This,pVal)	\
    (This)->lpVtbl -> get_ExpirationDate(This,pVal)

#define IMmsProtocolMm1_put_Reserved(This,newVal)	\
    (This)->lpVtbl -> put_Reserved(This,newVal)

#define IMmsProtocolMm1_get_LogFile(This,pVal)	\
    (This)->lpVtbl -> get_LogFile(This,pVal)

#define IMmsProtocolMm1_put_LogFile(This,newVal)	\
    (This)->lpVtbl -> put_LogFile(This,newVal)

#define IMmsProtocolMm1_get_ActivityFile(This,pVal)	\
    (This)->lpVtbl -> get_ActivityFile(This,pVal)

#define IMmsProtocolMm1_put_ActivityFile(This,newVal)	\
    (This)->lpVtbl -> put_ActivityFile(This,newVal)

#define IMmsProtocolMm1_put_DistributionID(This,newVal)	\
    (This)->lpVtbl -> put_DistributionID(This,newVal)

#define IMmsProtocolMm1_put_DistributionKey(This,newVal)	\
    (This)->lpVtbl -> put_DistributionKey(This,newVal)

#define IMmsProtocolMm1_Clear(This)	\
    (This)->lpVtbl -> Clear(This)

#define IMmsProtocolMm1_GetErrorDescription(This,newVal,pVal)	\
    (This)->lpVtbl -> GetErrorDescription(This,newVal,pVal)

#define IMmsProtocolMm1_Activate(This,newVal)	\
    (This)->lpVtbl -> Activate(This,newVal)

#define IMmsProtocolMm1_put_Device(This,newVal)	\
    (This)->lpVtbl -> put_Device(This,newVal)

#define IMmsProtocolMm1_get_Device(This,pVal)	\
    (This)->lpVtbl -> get_Device(This,pVal)

#define IMmsProtocolMm1_get_ProviderAPN(This,pVal)	\
    (This)->lpVtbl -> get_ProviderAPN(This,pVal)

#define IMmsProtocolMm1_put_ProviderAPN(This,newVal)	\
    (This)->lpVtbl -> put_ProviderAPN(This,newVal)

#define IMmsProtocolMm1_get_ProviderAPNAccount(This,pVal)	\
    (This)->lpVtbl -> get_ProviderAPNAccount(This,pVal)

#define IMmsProtocolMm1_put_ProviderAPNAccount(This,newVal)	\
    (This)->lpVtbl -> put_ProviderAPNAccount(This,newVal)

#define IMmsProtocolMm1_get_ProviderAPNPassword(This,pVal)	\
    (This)->lpVtbl -> get_ProviderAPNPassword(This,pVal)

#define IMmsProtocolMm1_put_ProviderAPNPassword(This,newVal)	\
    (This)->lpVtbl -> put_ProviderAPNPassword(This,newVal)

#define IMmsProtocolMm1_get_ProviderWAPGateway(This,pVal)	\
    (This)->lpVtbl -> get_ProviderWAPGateway(This,pVal)

#define IMmsProtocolMm1_put_ProviderWAPGateway(This,newVal)	\
    (This)->lpVtbl -> put_ProviderWAPGateway(This,newVal)

#define IMmsProtocolMm1_get_ProviderMMSC(This,pVal)	\
    (This)->lpVtbl -> get_ProviderMMSC(This,pVal)

#define IMmsProtocolMm1_put_ProviderMMSC(This,newVal)	\
    (This)->lpVtbl -> put_ProviderMMSC(This,newVal)

#define IMmsProtocolMm1_get_ProviderMessageSizeLimit(This,pVal)	\
    (This)->lpVtbl -> get_ProviderMessageSizeLimit(This,pVal)

#define IMmsProtocolMm1_put_ProviderMessageSizeLimit(This,newVal)	\
    (This)->lpVtbl -> put_ProviderMessageSizeLimit(This,newVal)

#define IMmsProtocolMm1_get_AdvancedSettings(This,pVal)	\
    (This)->lpVtbl -> get_AdvancedSettings(This,pVal)

#define IMmsProtocolMm1_put_AdvancedSettings(This,newVal)	\
    (This)->lpVtbl -> put_AdvancedSettings(This,newVal)

#define IMmsProtocolMm1_get_ProviderResponse(This,pVal)	\
    (This)->lpVtbl -> get_ProviderResponse(This,pVal)

#define IMmsProtocolMm1_get_MessageId(This,pVal)	\
    (This)->lpVtbl -> get_MessageId(This,pVal)

#define IMmsProtocolMm1_get_ProvidersFolder(This,pVal)	\
    (This)->lpVtbl -> get_ProvidersFolder(This,pVal)

#define IMmsProtocolMm1_Connect(This)	\
    (This)->lpVtbl -> Connect(This)

#define IMmsProtocolMm1_Disconnect(This)	\
    (This)->lpVtbl -> Disconnect(This)

#define IMmsProtocolMm1_Send(This,pVal)	\
    (This)->lpVtbl -> Send(This,pVal)

#define IMmsProtocolMm1_GetDeviceCount(This,pVal)	\
    (This)->lpVtbl -> GetDeviceCount(This,pVal)

#define IMmsProtocolMm1_GetDevice(This,lDevice,pVal)	\
    (This)->lpVtbl -> GetDevice(This,lDevice,pVal)

#define IMmsProtocolMm1_ProviderSaveConfig(This,bstrFile)	\
    (This)->lpVtbl -> ProviderSaveConfig(This,bstrFile)

#define IMmsProtocolMm1_ProviderLoadConfig(This,bstrFile)	\
    (This)->lpVtbl -> ProviderLoadConfig(This,bstrFile)

#define IMmsProtocolMm1_EnterPin(This,bstrPinCode)	\
    (This)->lpVtbl -> EnterPin(This,bstrPinCode)

#define IMmsProtocolMm1_SendCommand(This,bstrCommand,lTimeout,pbstrResponse)	\
    (This)->lpVtbl -> SendCommand(This,bstrCommand,lTimeout,pbstrResponse)

#define IMmsProtocolMm1_Retrieve(This,bstrContentLocation,pVal)	\
    (This)->lpVtbl -> Retrieve(This,bstrContentLocation,pVal)

#define IMmsProtocolMm1_GetFirstMessage(This,pVal)	\
    (This)->lpVtbl -> GetFirstMessage(This,pVal)

#define IMmsProtocolMm1_GetNextMessage(This,pVal)	\
    (This)->lpVtbl -> GetNextMessage(This,pVal)

#define IMmsProtocolMm1_Receive(This)	\
    (This)->lpVtbl -> Receive(This)

#endif /* COBJMACROS */


#endif 	/* C style interface */



/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm1_get_LastError_Proxy( 
    IMmsProtocolMm1 __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm1_get_LastError_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm1_get_Version_Proxy( 
    IMmsProtocolMm1 __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm1_get_Version_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm1_get_Build_Proxy( 
    IMmsProtocolMm1 __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm1_get_Build_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm1_get_ExpirationDate_Proxy( 
    IMmsProtocolMm1 __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm1_get_ExpirationDate_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm1_put_Reserved_Proxy( 
    IMmsProtocolMm1 __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB IMmsProtocolMm1_put_Reserved_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm1_get_LogFile_Proxy( 
    IMmsProtocolMm1 __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm1_get_LogFile_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm1_put_LogFile_Proxy( 
    IMmsProtocolMm1 __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB IMmsProtocolMm1_put_LogFile_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm1_get_ActivityFile_Proxy( 
    IMmsProtocolMm1 __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm1_get_ActivityFile_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm1_put_ActivityFile_Proxy( 
    IMmsProtocolMm1 __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB IMmsProtocolMm1_put_ActivityFile_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm1_put_DistributionID_Proxy( 
    IMmsProtocolMm1 __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB IMmsProtocolMm1_put_DistributionID_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm1_put_DistributionKey_Proxy( 
    IMmsProtocolMm1 __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB IMmsProtocolMm1_put_DistributionKey_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm1_Clear_Proxy( 
    IMmsProtocolMm1 __RPC_FAR * This);


void __RPC_STUB IMmsProtocolMm1_Clear_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm1_GetErrorDescription_Proxy( 
    IMmsProtocolMm1 __RPC_FAR * This,
    LONG newVal,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm1_GetErrorDescription_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm1_Activate_Proxy( 
    IMmsProtocolMm1 __RPC_FAR * This,
    BSTR newVal);


void __RPC_STUB IMmsProtocolMm1_Activate_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm1_put_Device_Proxy( 
    IMmsProtocolMm1 __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB IMmsProtocolMm1_put_Device_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm1_get_Device_Proxy( 
    IMmsProtocolMm1 __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm1_get_Device_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm1_get_ProviderAPN_Proxy( 
    IMmsProtocolMm1 __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm1_get_ProviderAPN_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm1_put_ProviderAPN_Proxy( 
    IMmsProtocolMm1 __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB IMmsProtocolMm1_put_ProviderAPN_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm1_get_ProviderAPNAccount_Proxy( 
    IMmsProtocolMm1 __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm1_get_ProviderAPNAccount_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm1_put_ProviderAPNAccount_Proxy( 
    IMmsProtocolMm1 __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB IMmsProtocolMm1_put_ProviderAPNAccount_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm1_get_ProviderAPNPassword_Proxy( 
    IMmsProtocolMm1 __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm1_get_ProviderAPNPassword_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm1_put_ProviderAPNPassword_Proxy( 
    IMmsProtocolMm1 __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB IMmsProtocolMm1_put_ProviderAPNPassword_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm1_get_ProviderWAPGateway_Proxy( 
    IMmsProtocolMm1 __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm1_get_ProviderWAPGateway_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm1_put_ProviderWAPGateway_Proxy( 
    IMmsProtocolMm1 __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB IMmsProtocolMm1_put_ProviderWAPGateway_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm1_get_ProviderMMSC_Proxy( 
    IMmsProtocolMm1 __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm1_get_ProviderMMSC_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm1_put_ProviderMMSC_Proxy( 
    IMmsProtocolMm1 __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB IMmsProtocolMm1_put_ProviderMMSC_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm1_get_ProviderMessageSizeLimit_Proxy( 
    IMmsProtocolMm1 __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm1_get_ProviderMessageSizeLimit_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm1_put_ProviderMessageSizeLimit_Proxy( 
    IMmsProtocolMm1 __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB IMmsProtocolMm1_put_ProviderMessageSizeLimit_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm1_get_AdvancedSettings_Proxy( 
    IMmsProtocolMm1 __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm1_get_AdvancedSettings_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm1_put_AdvancedSettings_Proxy( 
    IMmsProtocolMm1 __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB IMmsProtocolMm1_put_AdvancedSettings_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm1_get_ProviderResponse_Proxy( 
    IMmsProtocolMm1 __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm1_get_ProviderResponse_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm1_get_MessageId_Proxy( 
    IMmsProtocolMm1 __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm1_get_MessageId_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm1_get_ProvidersFolder_Proxy( 
    IMmsProtocolMm1 __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm1_get_ProvidersFolder_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm1_Connect_Proxy( 
    IMmsProtocolMm1 __RPC_FAR * This);


void __RPC_STUB IMmsProtocolMm1_Connect_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm1_Disconnect_Proxy( 
    IMmsProtocolMm1 __RPC_FAR * This);


void __RPC_STUB IMmsProtocolMm1_Disconnect_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm1_Send_Proxy( 
    IMmsProtocolMm1 __RPC_FAR * This,
    VARIANT __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm1_Send_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm1_GetDeviceCount_Proxy( 
    IMmsProtocolMm1 __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm1_GetDeviceCount_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm1_GetDevice_Proxy( 
    IMmsProtocolMm1 __RPC_FAR * This,
    LONG lDevice,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm1_GetDevice_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm1_ProviderSaveConfig_Proxy( 
    IMmsProtocolMm1 __RPC_FAR * This,
    BSTR bstrFile);


void __RPC_STUB IMmsProtocolMm1_ProviderSaveConfig_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm1_ProviderLoadConfig_Proxy( 
    IMmsProtocolMm1 __RPC_FAR * This,
    BSTR bstrFile);


void __RPC_STUB IMmsProtocolMm1_ProviderLoadConfig_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm1_EnterPin_Proxy( 
    IMmsProtocolMm1 __RPC_FAR * This,
    BSTR bstrPinCode);


void __RPC_STUB IMmsProtocolMm1_EnterPin_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm1_SendCommand_Proxy( 
    IMmsProtocolMm1 __RPC_FAR * This,
    BSTR bstrCommand,
    LONG lTimeout,
    /* [retval][out] */ BSTR __RPC_FAR *pbstrResponse);


void __RPC_STUB IMmsProtocolMm1_SendCommand_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm1_Retrieve_Proxy( 
    IMmsProtocolMm1 __RPC_FAR * This,
    BSTR bstrContentLocation,
    /* [retval][out] */ VARIANT __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm1_Retrieve_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [helpstring][id] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm1_GetFirstMessage_Proxy( 
    IMmsProtocolMm1 __RPC_FAR * This,
    /* [retval][out] */ VARIANT __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm1_GetFirstMessage_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [helpstring][id] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm1_GetNextMessage_Proxy( 
    IMmsProtocolMm1 __RPC_FAR * This,
    /* [retval][out] */ VARIANT __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm1_GetNextMessage_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [helpstring][id] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm1_Receive_Proxy( 
    IMmsProtocolMm1 __RPC_FAR * This);


void __RPC_STUB IMmsProtocolMm1_Receive_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);



#endif 	/* __IMmsProtocolMm1_INTERFACE_DEFINED__ */


#ifndef __IMmsSlide_INTERFACE_DEFINED__
#define __IMmsSlide_INTERFACE_DEFINED__

/* interface IMmsSlide */
/* [unique][helpstring][dual][uuid][object] */ 


EXTERN_C const IID IID_IMmsSlide;

#if defined(__cplusplus) && !defined(CINTERFACE)
    
    MIDL_INTERFACE("C97CA114-C43B-49D9-B077-41F7299C1A11")
    IMmsSlide : public IDispatch
    {
    public:
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_LastError( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Version( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Build( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ExpirationDate( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_Reserved( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_DistributionID( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_DistributionKey( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE Clear( void) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE GetErrorDescription( 
            LONG newVal,
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE Activate( 
            BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ID( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Duration( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_Duration( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_sysClone( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE AddText( 
            BSTR bstrText) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE AddAttachment( 
            BSTR newVal,
            /* [defaultvalue][optional][in] */ VARIANT __RPC_FAR *pVal = 0) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE CountAttachments( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE GetAttachmentName( 
            LONG lIndex,
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE SaveAttachment( 
            LONG lIndex,
            BSTR bstrFileName) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE GetTextCount( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE GetText( 
            LONG lIndex,
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
    };
    
#else 	/* C style interface */

    typedef struct IMmsSlideVtbl
    {
        BEGIN_INTERFACE
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *QueryInterface )( 
            IMmsSlide __RPC_FAR * This,
            /* [in] */ REFIID riid,
            /* [iid_is][out] */ void __RPC_FAR *__RPC_FAR *ppvObject);
        
        ULONG ( STDMETHODCALLTYPE __RPC_FAR *AddRef )( 
            IMmsSlide __RPC_FAR * This);
        
        ULONG ( STDMETHODCALLTYPE __RPC_FAR *Release )( 
            IMmsSlide __RPC_FAR * This);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetTypeInfoCount )( 
            IMmsSlide __RPC_FAR * This,
            /* [out] */ UINT __RPC_FAR *pctinfo);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetTypeInfo )( 
            IMmsSlide __RPC_FAR * This,
            /* [in] */ UINT iTInfo,
            /* [in] */ LCID lcid,
            /* [out] */ ITypeInfo __RPC_FAR *__RPC_FAR *ppTInfo);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetIDsOfNames )( 
            IMmsSlide __RPC_FAR * This,
            /* [in] */ REFIID riid,
            /* [size_is][in] */ LPOLESTR __RPC_FAR *rgszNames,
            /* [in] */ UINT cNames,
            /* [in] */ LCID lcid,
            /* [size_is][out] */ DISPID __RPC_FAR *rgDispId);
        
        /* [local] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Invoke )( 
            IMmsSlide __RPC_FAR * This,
            /* [in] */ DISPID dispIdMember,
            /* [in] */ REFIID riid,
            /* [in] */ LCID lcid,
            /* [in] */ WORD wFlags,
            /* [out][in] */ DISPPARAMS __RPC_FAR *pDispParams,
            /* [out] */ VARIANT __RPC_FAR *pVarResult,
            /* [out] */ EXCEPINFO __RPC_FAR *pExcepInfo,
            /* [out] */ UINT __RPC_FAR *puArgErr);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_LastError )( 
            IMmsSlide __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Version )( 
            IMmsSlide __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Build )( 
            IMmsSlide __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ExpirationDate )( 
            IMmsSlide __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_Reserved )( 
            IMmsSlide __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_DistributionID )( 
            IMmsSlide __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_DistributionKey )( 
            IMmsSlide __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Clear )( 
            IMmsSlide __RPC_FAR * This);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetErrorDescription )( 
            IMmsSlide __RPC_FAR * This,
            LONG newVal,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Activate )( 
            IMmsSlide __RPC_FAR * This,
            BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ID )( 
            IMmsSlide __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Duration )( 
            IMmsSlide __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_Duration )( 
            IMmsSlide __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_sysClone )( 
            IMmsSlide __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *AddText )( 
            IMmsSlide __RPC_FAR * This,
            BSTR bstrText);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *AddAttachment )( 
            IMmsSlide __RPC_FAR * This,
            BSTR newVal,
            /* [defaultvalue][optional][in] */ VARIANT __RPC_FAR *pVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *CountAttachments )( 
            IMmsSlide __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetAttachmentName )( 
            IMmsSlide __RPC_FAR * This,
            LONG lIndex,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *SaveAttachment )( 
            IMmsSlide __RPC_FAR * This,
            LONG lIndex,
            BSTR bstrFileName);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetTextCount )( 
            IMmsSlide __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetText )( 
            IMmsSlide __RPC_FAR * This,
            LONG lIndex,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        END_INTERFACE
    } IMmsSlideVtbl;

    interface IMmsSlide
    {
        CONST_VTBL struct IMmsSlideVtbl __RPC_FAR *lpVtbl;
    };

    

#ifdef COBJMACROS


#define IMmsSlide_QueryInterface(This,riid,ppvObject)	\
    (This)->lpVtbl -> QueryInterface(This,riid,ppvObject)

#define IMmsSlide_AddRef(This)	\
    (This)->lpVtbl -> AddRef(This)

#define IMmsSlide_Release(This)	\
    (This)->lpVtbl -> Release(This)


#define IMmsSlide_GetTypeInfoCount(This,pctinfo)	\
    (This)->lpVtbl -> GetTypeInfoCount(This,pctinfo)

#define IMmsSlide_GetTypeInfo(This,iTInfo,lcid,ppTInfo)	\
    (This)->lpVtbl -> GetTypeInfo(This,iTInfo,lcid,ppTInfo)

#define IMmsSlide_GetIDsOfNames(This,riid,rgszNames,cNames,lcid,rgDispId)	\
    (This)->lpVtbl -> GetIDsOfNames(This,riid,rgszNames,cNames,lcid,rgDispId)

#define IMmsSlide_Invoke(This,dispIdMember,riid,lcid,wFlags,pDispParams,pVarResult,pExcepInfo,puArgErr)	\
    (This)->lpVtbl -> Invoke(This,dispIdMember,riid,lcid,wFlags,pDispParams,pVarResult,pExcepInfo,puArgErr)


#define IMmsSlide_get_LastError(This,pVal)	\
    (This)->lpVtbl -> get_LastError(This,pVal)

#define IMmsSlide_get_Version(This,pVal)	\
    (This)->lpVtbl -> get_Version(This,pVal)

#define IMmsSlide_get_Build(This,pVal)	\
    (This)->lpVtbl -> get_Build(This,pVal)

#define IMmsSlide_get_ExpirationDate(This,pVal)	\
    (This)->lpVtbl -> get_ExpirationDate(This,pVal)

#define IMmsSlide_put_Reserved(This,newVal)	\
    (This)->lpVtbl -> put_Reserved(This,newVal)

#define IMmsSlide_put_DistributionID(This,newVal)	\
    (This)->lpVtbl -> put_DistributionID(This,newVal)

#define IMmsSlide_put_DistributionKey(This,newVal)	\
    (This)->lpVtbl -> put_DistributionKey(This,newVal)

#define IMmsSlide_Clear(This)	\
    (This)->lpVtbl -> Clear(This)

#define IMmsSlide_GetErrorDescription(This,newVal,pVal)	\
    (This)->lpVtbl -> GetErrorDescription(This,newVal,pVal)

#define IMmsSlide_Activate(This,newVal)	\
    (This)->lpVtbl -> Activate(This,newVal)

#define IMmsSlide_get_ID(This,pVal)	\
    (This)->lpVtbl -> get_ID(This,pVal)

#define IMmsSlide_get_Duration(This,pVal)	\
    (This)->lpVtbl -> get_Duration(This,pVal)

#define IMmsSlide_put_Duration(This,newVal)	\
    (This)->lpVtbl -> put_Duration(This,newVal)

#define IMmsSlide_get_sysClone(This,pVal)	\
    (This)->lpVtbl -> get_sysClone(This,pVal)

#define IMmsSlide_AddText(This,bstrText)	\
    (This)->lpVtbl -> AddText(This,bstrText)

#define IMmsSlide_AddAttachment(This,newVal,pVal)	\
    (This)->lpVtbl -> AddAttachment(This,newVal,pVal)

#define IMmsSlide_CountAttachments(This,pVal)	\
    (This)->lpVtbl -> CountAttachments(This,pVal)

#define IMmsSlide_GetAttachmentName(This,lIndex,pVal)	\
    (This)->lpVtbl -> GetAttachmentName(This,lIndex,pVal)

#define IMmsSlide_SaveAttachment(This,lIndex,bstrFileName)	\
    (This)->lpVtbl -> SaveAttachment(This,lIndex,bstrFileName)

#define IMmsSlide_GetTextCount(This,pVal)	\
    (This)->lpVtbl -> GetTextCount(This,pVal)

#define IMmsSlide_GetText(This,lIndex,pVal)	\
    (This)->lpVtbl -> GetText(This,lIndex,pVal)

#endif /* COBJMACROS */


#endif 	/* C style interface */



/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsSlide_get_LastError_Proxy( 
    IMmsSlide __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsSlide_get_LastError_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsSlide_get_Version_Proxy( 
    IMmsSlide __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsSlide_get_Version_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsSlide_get_Build_Proxy( 
    IMmsSlide __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsSlide_get_Build_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsSlide_get_ExpirationDate_Proxy( 
    IMmsSlide __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsSlide_get_ExpirationDate_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsSlide_put_Reserved_Proxy( 
    IMmsSlide __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB IMmsSlide_put_Reserved_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsSlide_put_DistributionID_Proxy( 
    IMmsSlide __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB IMmsSlide_put_DistributionID_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsSlide_put_DistributionKey_Proxy( 
    IMmsSlide __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB IMmsSlide_put_DistributionKey_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE IMmsSlide_Clear_Proxy( 
    IMmsSlide __RPC_FAR * This);


void __RPC_STUB IMmsSlide_Clear_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE IMmsSlide_GetErrorDescription_Proxy( 
    IMmsSlide __RPC_FAR * This,
    LONG newVal,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsSlide_GetErrorDescription_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE IMmsSlide_Activate_Proxy( 
    IMmsSlide __RPC_FAR * This,
    BSTR newVal);


void __RPC_STUB IMmsSlide_Activate_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsSlide_get_ID_Proxy( 
    IMmsSlide __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsSlide_get_ID_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsSlide_get_Duration_Proxy( 
    IMmsSlide __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsSlide_get_Duration_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsSlide_put_Duration_Proxy( 
    IMmsSlide __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB IMmsSlide_put_Duration_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsSlide_get_sysClone_Proxy( 
    IMmsSlide __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsSlide_get_sysClone_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE IMmsSlide_AddText_Proxy( 
    IMmsSlide __RPC_FAR * This,
    BSTR bstrText);


void __RPC_STUB IMmsSlide_AddText_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE IMmsSlide_AddAttachment_Proxy( 
    IMmsSlide __RPC_FAR * This,
    BSTR newVal,
    /* [defaultvalue][optional][in] */ VARIANT __RPC_FAR *pVal);


void __RPC_STUB IMmsSlide_AddAttachment_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE IMmsSlide_CountAttachments_Proxy( 
    IMmsSlide __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsSlide_CountAttachments_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE IMmsSlide_GetAttachmentName_Proxy( 
    IMmsSlide __RPC_FAR * This,
    LONG lIndex,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsSlide_GetAttachmentName_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE IMmsSlide_SaveAttachment_Proxy( 
    IMmsSlide __RPC_FAR * This,
    LONG lIndex,
    BSTR bstrFileName);


void __RPC_STUB IMmsSlide_SaveAttachment_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE IMmsSlide_GetTextCount_Proxy( 
    IMmsSlide __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsSlide_GetTextCount_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE IMmsSlide_GetText_Proxy( 
    IMmsSlide __RPC_FAR * This,
    LONG lIndex,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsSlide_GetText_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);



#endif 	/* __IMmsSlide_INTERFACE_DEFINED__ */


#ifndef __IMmsConstants_INTERFACE_DEFINED__
#define __IMmsConstants_INTERFACE_DEFINED__

/* interface IMmsConstants */
/* [unique][helpstring][dual][uuid][object] */ 


EXTERN_C const IID IID_IMmsConstants;

#if defined(__cplusplus) && !defined(CINTERFACE)
    
    MIDL_INTERFACE("B85A2092-FE47-452A-AFC8-8F12C5BDCDE3")
    IMmsConstants : public IDispatch
    {
    public:
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMMS_CLASS_PERSONAL( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMMS_CLASS_ADVERTISEMENT( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMMS_CLASS_INFORMATIONAL( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMMS_CLASS_AUTO( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMMS_PRIORITY_LOW( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMMS_PRIORITY_NORMAL( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMMS_PRIORITY_HIGH( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMMS_DRM_FORWARDLOCK( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMMS_DRM_PLAY( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMMS_DRM_DISPLAY( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMMS_DRM_EXECUTE( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMMS_DRM_PRINT( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMMS_MM7VARIATION_3GPP( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMMS_MM7VARIATION_ERICSSON( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMMS_MM7VARIATION_PAP( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMMS_PROTOCOL_MM1( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMMS_PROTOCOL_MM4( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMMS_PROTOCOL_MM7( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMMS_VERSION_5_2_0( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMMS_VERSION_5_3_0( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMMS_VERSION_5_4_0( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMMS_VERSION_5_5_0( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMMS_VERSION_5_6_0( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMMS_VERSION_5_7_0( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMMS_VERSION_5_8_0( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMMS_VERSION_5_9_0( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMMS_VERSION_5_10_0( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMMS_VERSION_5_11_0( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMMS_VERSION_6_0_0( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMMS_VERSION_6_1_0( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMMS_VERSION_6_2_0( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMMS_VERSION_6_3_0( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMMS_VERSION_6_4_0( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMMS_VERSION_6_5_0( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMMS_VERSION_6_6_0( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMMS_VERSION_6_7_0( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMMS_SCHEMA_REL5_MM7_1_0( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMMS_SCHEMA_REL5_MM7_1_1( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMMS_SCHEMA_REL5_MM7_1_2( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMMS_SCHEMA_REL5_MM7_1_3( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMMS_SCHEMA_REL5_MM7_1_4( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMMS_SCHEMA_REL5_MM7_1_5( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMMS_SCHEMA_REL6_MM7_1_0( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMMS_SCHEMA_REL6_MM7_1_1( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMMS_SCHEMA_REL6_MM7_1_2( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMMS_SCHEMA_REL6_MM7_1_3( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMMS_MM1FILE_MSENDREQ( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMMS_MM1FILE_MRETRIEVECONF( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMMS_RECIPIENT_TO( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMMS_RECIPIENT_CC( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_asMMS_RECIPIENT_BCC( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
    };
    
#else 	/* C style interface */

    typedef struct IMmsConstantsVtbl
    {
        BEGIN_INTERFACE
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *QueryInterface )( 
            IMmsConstants __RPC_FAR * This,
            /* [in] */ REFIID riid,
            /* [iid_is][out] */ void __RPC_FAR *__RPC_FAR *ppvObject);
        
        ULONG ( STDMETHODCALLTYPE __RPC_FAR *AddRef )( 
            IMmsConstants __RPC_FAR * This);
        
        ULONG ( STDMETHODCALLTYPE __RPC_FAR *Release )( 
            IMmsConstants __RPC_FAR * This);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetTypeInfoCount )( 
            IMmsConstants __RPC_FAR * This,
            /* [out] */ UINT __RPC_FAR *pctinfo);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetTypeInfo )( 
            IMmsConstants __RPC_FAR * This,
            /* [in] */ UINT iTInfo,
            /* [in] */ LCID lcid,
            /* [out] */ ITypeInfo __RPC_FAR *__RPC_FAR *ppTInfo);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetIDsOfNames )( 
            IMmsConstants __RPC_FAR * This,
            /* [in] */ REFIID riid,
            /* [size_is][in] */ LPOLESTR __RPC_FAR *rgszNames,
            /* [in] */ UINT cNames,
            /* [in] */ LCID lcid,
            /* [size_is][out] */ DISPID __RPC_FAR *rgDispId);
        
        /* [local] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Invoke )( 
            IMmsConstants __RPC_FAR * This,
            /* [in] */ DISPID dispIdMember,
            /* [in] */ REFIID riid,
            /* [in] */ LCID lcid,
            /* [in] */ WORD wFlags,
            /* [out][in] */ DISPPARAMS __RPC_FAR *pDispParams,
            /* [out] */ VARIANT __RPC_FAR *pVarResult,
            /* [out] */ EXCEPINFO __RPC_FAR *pExcepInfo,
            /* [out] */ UINT __RPC_FAR *puArgErr);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMMS_CLASS_PERSONAL )( 
            IMmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMMS_CLASS_ADVERTISEMENT )( 
            IMmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMMS_CLASS_INFORMATIONAL )( 
            IMmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMMS_CLASS_AUTO )( 
            IMmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMMS_PRIORITY_LOW )( 
            IMmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMMS_PRIORITY_NORMAL )( 
            IMmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMMS_PRIORITY_HIGH )( 
            IMmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMMS_DRM_FORWARDLOCK )( 
            IMmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMMS_DRM_PLAY )( 
            IMmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMMS_DRM_DISPLAY )( 
            IMmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMMS_DRM_EXECUTE )( 
            IMmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMMS_DRM_PRINT )( 
            IMmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMMS_MM7VARIATION_3GPP )( 
            IMmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMMS_MM7VARIATION_ERICSSON )( 
            IMmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMMS_MM7VARIATION_PAP )( 
            IMmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMMS_PROTOCOL_MM1 )( 
            IMmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMMS_PROTOCOL_MM4 )( 
            IMmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMMS_PROTOCOL_MM7 )( 
            IMmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMMS_VERSION_5_2_0 )( 
            IMmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMMS_VERSION_5_3_0 )( 
            IMmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMMS_VERSION_5_4_0 )( 
            IMmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMMS_VERSION_5_5_0 )( 
            IMmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMMS_VERSION_5_6_0 )( 
            IMmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMMS_VERSION_5_7_0 )( 
            IMmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMMS_VERSION_5_8_0 )( 
            IMmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMMS_VERSION_5_9_0 )( 
            IMmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMMS_VERSION_5_10_0 )( 
            IMmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMMS_VERSION_5_11_0 )( 
            IMmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMMS_VERSION_6_0_0 )( 
            IMmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMMS_VERSION_6_1_0 )( 
            IMmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMMS_VERSION_6_2_0 )( 
            IMmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMMS_VERSION_6_3_0 )( 
            IMmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMMS_VERSION_6_4_0 )( 
            IMmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMMS_VERSION_6_5_0 )( 
            IMmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMMS_VERSION_6_6_0 )( 
            IMmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMMS_VERSION_6_7_0 )( 
            IMmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMMS_SCHEMA_REL5_MM7_1_0 )( 
            IMmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMMS_SCHEMA_REL5_MM7_1_1 )( 
            IMmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMMS_SCHEMA_REL5_MM7_1_2 )( 
            IMmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMMS_SCHEMA_REL5_MM7_1_3 )( 
            IMmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMMS_SCHEMA_REL5_MM7_1_4 )( 
            IMmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMMS_SCHEMA_REL5_MM7_1_5 )( 
            IMmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMMS_SCHEMA_REL6_MM7_1_0 )( 
            IMmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMMS_SCHEMA_REL6_MM7_1_1 )( 
            IMmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMMS_SCHEMA_REL6_MM7_1_2 )( 
            IMmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMMS_SCHEMA_REL6_MM7_1_3 )( 
            IMmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMMS_MM1FILE_MSENDREQ )( 
            IMmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMMS_MM1FILE_MRETRIEVECONF )( 
            IMmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMMS_RECIPIENT_TO )( 
            IMmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMMS_RECIPIENT_CC )( 
            IMmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_asMMS_RECIPIENT_BCC )( 
            IMmsConstants __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        END_INTERFACE
    } IMmsConstantsVtbl;

    interface IMmsConstants
    {
        CONST_VTBL struct IMmsConstantsVtbl __RPC_FAR *lpVtbl;
    };

    

#ifdef COBJMACROS


#define IMmsConstants_QueryInterface(This,riid,ppvObject)	\
    (This)->lpVtbl -> QueryInterface(This,riid,ppvObject)

#define IMmsConstants_AddRef(This)	\
    (This)->lpVtbl -> AddRef(This)

#define IMmsConstants_Release(This)	\
    (This)->lpVtbl -> Release(This)


#define IMmsConstants_GetTypeInfoCount(This,pctinfo)	\
    (This)->lpVtbl -> GetTypeInfoCount(This,pctinfo)

#define IMmsConstants_GetTypeInfo(This,iTInfo,lcid,ppTInfo)	\
    (This)->lpVtbl -> GetTypeInfo(This,iTInfo,lcid,ppTInfo)

#define IMmsConstants_GetIDsOfNames(This,riid,rgszNames,cNames,lcid,rgDispId)	\
    (This)->lpVtbl -> GetIDsOfNames(This,riid,rgszNames,cNames,lcid,rgDispId)

#define IMmsConstants_Invoke(This,dispIdMember,riid,lcid,wFlags,pDispParams,pVarResult,pExcepInfo,puArgErr)	\
    (This)->lpVtbl -> Invoke(This,dispIdMember,riid,lcid,wFlags,pDispParams,pVarResult,pExcepInfo,puArgErr)


#define IMmsConstants_get_asMMS_CLASS_PERSONAL(This,pVal)	\
    (This)->lpVtbl -> get_asMMS_CLASS_PERSONAL(This,pVal)

#define IMmsConstants_get_asMMS_CLASS_ADVERTISEMENT(This,pVal)	\
    (This)->lpVtbl -> get_asMMS_CLASS_ADVERTISEMENT(This,pVal)

#define IMmsConstants_get_asMMS_CLASS_INFORMATIONAL(This,pVal)	\
    (This)->lpVtbl -> get_asMMS_CLASS_INFORMATIONAL(This,pVal)

#define IMmsConstants_get_asMMS_CLASS_AUTO(This,pVal)	\
    (This)->lpVtbl -> get_asMMS_CLASS_AUTO(This,pVal)

#define IMmsConstants_get_asMMS_PRIORITY_LOW(This,pVal)	\
    (This)->lpVtbl -> get_asMMS_PRIORITY_LOW(This,pVal)

#define IMmsConstants_get_asMMS_PRIORITY_NORMAL(This,pVal)	\
    (This)->lpVtbl -> get_asMMS_PRIORITY_NORMAL(This,pVal)

#define IMmsConstants_get_asMMS_PRIORITY_HIGH(This,pVal)	\
    (This)->lpVtbl -> get_asMMS_PRIORITY_HIGH(This,pVal)

#define IMmsConstants_get_asMMS_DRM_FORWARDLOCK(This,pVal)	\
    (This)->lpVtbl -> get_asMMS_DRM_FORWARDLOCK(This,pVal)

#define IMmsConstants_get_asMMS_DRM_PLAY(This,pVal)	\
    (This)->lpVtbl -> get_asMMS_DRM_PLAY(This,pVal)

#define IMmsConstants_get_asMMS_DRM_DISPLAY(This,pVal)	\
    (This)->lpVtbl -> get_asMMS_DRM_DISPLAY(This,pVal)

#define IMmsConstants_get_asMMS_DRM_EXECUTE(This,pVal)	\
    (This)->lpVtbl -> get_asMMS_DRM_EXECUTE(This,pVal)

#define IMmsConstants_get_asMMS_DRM_PRINT(This,pVal)	\
    (This)->lpVtbl -> get_asMMS_DRM_PRINT(This,pVal)

#define IMmsConstants_get_asMMS_MM7VARIATION_3GPP(This,pVal)	\
    (This)->lpVtbl -> get_asMMS_MM7VARIATION_3GPP(This,pVal)

#define IMmsConstants_get_asMMS_MM7VARIATION_ERICSSON(This,pVal)	\
    (This)->lpVtbl -> get_asMMS_MM7VARIATION_ERICSSON(This,pVal)

#define IMmsConstants_get_asMMS_MM7VARIATION_PAP(This,pVal)	\
    (This)->lpVtbl -> get_asMMS_MM7VARIATION_PAP(This,pVal)

#define IMmsConstants_get_asMMS_PROTOCOL_MM1(This,pVal)	\
    (This)->lpVtbl -> get_asMMS_PROTOCOL_MM1(This,pVal)

#define IMmsConstants_get_asMMS_PROTOCOL_MM4(This,pVal)	\
    (This)->lpVtbl -> get_asMMS_PROTOCOL_MM4(This,pVal)

#define IMmsConstants_get_asMMS_PROTOCOL_MM7(This,pVal)	\
    (This)->lpVtbl -> get_asMMS_PROTOCOL_MM7(This,pVal)

#define IMmsConstants_get_asMMS_VERSION_5_2_0(This,pVal)	\
    (This)->lpVtbl -> get_asMMS_VERSION_5_2_0(This,pVal)

#define IMmsConstants_get_asMMS_VERSION_5_3_0(This,pVal)	\
    (This)->lpVtbl -> get_asMMS_VERSION_5_3_0(This,pVal)

#define IMmsConstants_get_asMMS_VERSION_5_4_0(This,pVal)	\
    (This)->lpVtbl -> get_asMMS_VERSION_5_4_0(This,pVal)

#define IMmsConstants_get_asMMS_VERSION_5_5_0(This,pVal)	\
    (This)->lpVtbl -> get_asMMS_VERSION_5_5_0(This,pVal)

#define IMmsConstants_get_asMMS_VERSION_5_6_0(This,pVal)	\
    (This)->lpVtbl -> get_asMMS_VERSION_5_6_0(This,pVal)

#define IMmsConstants_get_asMMS_VERSION_5_7_0(This,pVal)	\
    (This)->lpVtbl -> get_asMMS_VERSION_5_7_0(This,pVal)

#define IMmsConstants_get_asMMS_VERSION_5_8_0(This,pVal)	\
    (This)->lpVtbl -> get_asMMS_VERSION_5_8_0(This,pVal)

#define IMmsConstants_get_asMMS_VERSION_5_9_0(This,pVal)	\
    (This)->lpVtbl -> get_asMMS_VERSION_5_9_0(This,pVal)

#define IMmsConstants_get_asMMS_VERSION_5_10_0(This,pVal)	\
    (This)->lpVtbl -> get_asMMS_VERSION_5_10_0(This,pVal)

#define IMmsConstants_get_asMMS_VERSION_5_11_0(This,pVal)	\
    (This)->lpVtbl -> get_asMMS_VERSION_5_11_0(This,pVal)

#define IMmsConstants_get_asMMS_VERSION_6_0_0(This,pVal)	\
    (This)->lpVtbl -> get_asMMS_VERSION_6_0_0(This,pVal)

#define IMmsConstants_get_asMMS_VERSION_6_1_0(This,pVal)	\
    (This)->lpVtbl -> get_asMMS_VERSION_6_1_0(This,pVal)

#define IMmsConstants_get_asMMS_VERSION_6_2_0(This,pVal)	\
    (This)->lpVtbl -> get_asMMS_VERSION_6_2_0(This,pVal)

#define IMmsConstants_get_asMMS_VERSION_6_3_0(This,pVal)	\
    (This)->lpVtbl -> get_asMMS_VERSION_6_3_0(This,pVal)

#define IMmsConstants_get_asMMS_VERSION_6_4_0(This,pVal)	\
    (This)->lpVtbl -> get_asMMS_VERSION_6_4_0(This,pVal)

#define IMmsConstants_get_asMMS_VERSION_6_5_0(This,pVal)	\
    (This)->lpVtbl -> get_asMMS_VERSION_6_5_0(This,pVal)

#define IMmsConstants_get_asMMS_VERSION_6_6_0(This,pVal)	\
    (This)->lpVtbl -> get_asMMS_VERSION_6_6_0(This,pVal)

#define IMmsConstants_get_asMMS_VERSION_6_7_0(This,pVal)	\
    (This)->lpVtbl -> get_asMMS_VERSION_6_7_0(This,pVal)

#define IMmsConstants_get_asMMS_SCHEMA_REL5_MM7_1_0(This,pVal)	\
    (This)->lpVtbl -> get_asMMS_SCHEMA_REL5_MM7_1_0(This,pVal)

#define IMmsConstants_get_asMMS_SCHEMA_REL5_MM7_1_1(This,pVal)	\
    (This)->lpVtbl -> get_asMMS_SCHEMA_REL5_MM7_1_1(This,pVal)

#define IMmsConstants_get_asMMS_SCHEMA_REL5_MM7_1_2(This,pVal)	\
    (This)->lpVtbl -> get_asMMS_SCHEMA_REL5_MM7_1_2(This,pVal)

#define IMmsConstants_get_asMMS_SCHEMA_REL5_MM7_1_3(This,pVal)	\
    (This)->lpVtbl -> get_asMMS_SCHEMA_REL5_MM7_1_3(This,pVal)

#define IMmsConstants_get_asMMS_SCHEMA_REL5_MM7_1_4(This,pVal)	\
    (This)->lpVtbl -> get_asMMS_SCHEMA_REL5_MM7_1_4(This,pVal)

#define IMmsConstants_get_asMMS_SCHEMA_REL5_MM7_1_5(This,pVal)	\
    (This)->lpVtbl -> get_asMMS_SCHEMA_REL5_MM7_1_5(This,pVal)

#define IMmsConstants_get_asMMS_SCHEMA_REL6_MM7_1_0(This,pVal)	\
    (This)->lpVtbl -> get_asMMS_SCHEMA_REL6_MM7_1_0(This,pVal)

#define IMmsConstants_get_asMMS_SCHEMA_REL6_MM7_1_1(This,pVal)	\
    (This)->lpVtbl -> get_asMMS_SCHEMA_REL6_MM7_1_1(This,pVal)

#define IMmsConstants_get_asMMS_SCHEMA_REL6_MM7_1_2(This,pVal)	\
    (This)->lpVtbl -> get_asMMS_SCHEMA_REL6_MM7_1_2(This,pVal)

#define IMmsConstants_get_asMMS_SCHEMA_REL6_MM7_1_3(This,pVal)	\
    (This)->lpVtbl -> get_asMMS_SCHEMA_REL6_MM7_1_3(This,pVal)

#define IMmsConstants_get_asMMS_MM1FILE_MSENDREQ(This,pVal)	\
    (This)->lpVtbl -> get_asMMS_MM1FILE_MSENDREQ(This,pVal)

#define IMmsConstants_get_asMMS_MM1FILE_MRETRIEVECONF(This,pVal)	\
    (This)->lpVtbl -> get_asMMS_MM1FILE_MRETRIEVECONF(This,pVal)

#define IMmsConstants_get_asMMS_RECIPIENT_TO(This,pVal)	\
    (This)->lpVtbl -> get_asMMS_RECIPIENT_TO(This,pVal)

#define IMmsConstants_get_asMMS_RECIPIENT_CC(This,pVal)	\
    (This)->lpVtbl -> get_asMMS_RECIPIENT_CC(This,pVal)

#define IMmsConstants_get_asMMS_RECIPIENT_BCC(This,pVal)	\
    (This)->lpVtbl -> get_asMMS_RECIPIENT_BCC(This,pVal)

#endif /* COBJMACROS */


#endif 	/* C style interface */



/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsConstants_get_asMMS_CLASS_PERSONAL_Proxy( 
    IMmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsConstants_get_asMMS_CLASS_PERSONAL_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsConstants_get_asMMS_CLASS_ADVERTISEMENT_Proxy( 
    IMmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsConstants_get_asMMS_CLASS_ADVERTISEMENT_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsConstants_get_asMMS_CLASS_INFORMATIONAL_Proxy( 
    IMmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsConstants_get_asMMS_CLASS_INFORMATIONAL_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsConstants_get_asMMS_CLASS_AUTO_Proxy( 
    IMmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsConstants_get_asMMS_CLASS_AUTO_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsConstants_get_asMMS_PRIORITY_LOW_Proxy( 
    IMmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsConstants_get_asMMS_PRIORITY_LOW_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsConstants_get_asMMS_PRIORITY_NORMAL_Proxy( 
    IMmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsConstants_get_asMMS_PRIORITY_NORMAL_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsConstants_get_asMMS_PRIORITY_HIGH_Proxy( 
    IMmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsConstants_get_asMMS_PRIORITY_HIGH_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsConstants_get_asMMS_DRM_FORWARDLOCK_Proxy( 
    IMmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsConstants_get_asMMS_DRM_FORWARDLOCK_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsConstants_get_asMMS_DRM_PLAY_Proxy( 
    IMmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsConstants_get_asMMS_DRM_PLAY_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsConstants_get_asMMS_DRM_DISPLAY_Proxy( 
    IMmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsConstants_get_asMMS_DRM_DISPLAY_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsConstants_get_asMMS_DRM_EXECUTE_Proxy( 
    IMmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsConstants_get_asMMS_DRM_EXECUTE_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsConstants_get_asMMS_DRM_PRINT_Proxy( 
    IMmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsConstants_get_asMMS_DRM_PRINT_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsConstants_get_asMMS_MM7VARIATION_3GPP_Proxy( 
    IMmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsConstants_get_asMMS_MM7VARIATION_3GPP_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsConstants_get_asMMS_MM7VARIATION_ERICSSON_Proxy( 
    IMmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsConstants_get_asMMS_MM7VARIATION_ERICSSON_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsConstants_get_asMMS_MM7VARIATION_PAP_Proxy( 
    IMmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsConstants_get_asMMS_MM7VARIATION_PAP_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsConstants_get_asMMS_PROTOCOL_MM1_Proxy( 
    IMmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsConstants_get_asMMS_PROTOCOL_MM1_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsConstants_get_asMMS_PROTOCOL_MM4_Proxy( 
    IMmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsConstants_get_asMMS_PROTOCOL_MM4_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsConstants_get_asMMS_PROTOCOL_MM7_Proxy( 
    IMmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsConstants_get_asMMS_PROTOCOL_MM7_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsConstants_get_asMMS_VERSION_5_2_0_Proxy( 
    IMmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsConstants_get_asMMS_VERSION_5_2_0_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsConstants_get_asMMS_VERSION_5_3_0_Proxy( 
    IMmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsConstants_get_asMMS_VERSION_5_3_0_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsConstants_get_asMMS_VERSION_5_4_0_Proxy( 
    IMmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsConstants_get_asMMS_VERSION_5_4_0_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsConstants_get_asMMS_VERSION_5_5_0_Proxy( 
    IMmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsConstants_get_asMMS_VERSION_5_5_0_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsConstants_get_asMMS_VERSION_5_6_0_Proxy( 
    IMmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsConstants_get_asMMS_VERSION_5_6_0_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsConstants_get_asMMS_VERSION_5_7_0_Proxy( 
    IMmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsConstants_get_asMMS_VERSION_5_7_0_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsConstants_get_asMMS_VERSION_5_8_0_Proxy( 
    IMmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsConstants_get_asMMS_VERSION_5_8_0_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsConstants_get_asMMS_VERSION_5_9_0_Proxy( 
    IMmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsConstants_get_asMMS_VERSION_5_9_0_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsConstants_get_asMMS_VERSION_5_10_0_Proxy( 
    IMmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsConstants_get_asMMS_VERSION_5_10_0_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsConstants_get_asMMS_VERSION_5_11_0_Proxy( 
    IMmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsConstants_get_asMMS_VERSION_5_11_0_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsConstants_get_asMMS_VERSION_6_0_0_Proxy( 
    IMmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsConstants_get_asMMS_VERSION_6_0_0_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsConstants_get_asMMS_VERSION_6_1_0_Proxy( 
    IMmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsConstants_get_asMMS_VERSION_6_1_0_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsConstants_get_asMMS_VERSION_6_2_0_Proxy( 
    IMmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsConstants_get_asMMS_VERSION_6_2_0_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsConstants_get_asMMS_VERSION_6_3_0_Proxy( 
    IMmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsConstants_get_asMMS_VERSION_6_3_0_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsConstants_get_asMMS_VERSION_6_4_0_Proxy( 
    IMmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsConstants_get_asMMS_VERSION_6_4_0_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsConstants_get_asMMS_VERSION_6_5_0_Proxy( 
    IMmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsConstants_get_asMMS_VERSION_6_5_0_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsConstants_get_asMMS_VERSION_6_6_0_Proxy( 
    IMmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsConstants_get_asMMS_VERSION_6_6_0_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsConstants_get_asMMS_VERSION_6_7_0_Proxy( 
    IMmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsConstants_get_asMMS_VERSION_6_7_0_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsConstants_get_asMMS_SCHEMA_REL5_MM7_1_0_Proxy( 
    IMmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsConstants_get_asMMS_SCHEMA_REL5_MM7_1_0_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsConstants_get_asMMS_SCHEMA_REL5_MM7_1_1_Proxy( 
    IMmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsConstants_get_asMMS_SCHEMA_REL5_MM7_1_1_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsConstants_get_asMMS_SCHEMA_REL5_MM7_1_2_Proxy( 
    IMmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsConstants_get_asMMS_SCHEMA_REL5_MM7_1_2_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsConstants_get_asMMS_SCHEMA_REL5_MM7_1_3_Proxy( 
    IMmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsConstants_get_asMMS_SCHEMA_REL5_MM7_1_3_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsConstants_get_asMMS_SCHEMA_REL5_MM7_1_4_Proxy( 
    IMmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsConstants_get_asMMS_SCHEMA_REL5_MM7_1_4_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsConstants_get_asMMS_SCHEMA_REL5_MM7_1_5_Proxy( 
    IMmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsConstants_get_asMMS_SCHEMA_REL5_MM7_1_5_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsConstants_get_asMMS_SCHEMA_REL6_MM7_1_0_Proxy( 
    IMmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsConstants_get_asMMS_SCHEMA_REL6_MM7_1_0_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsConstants_get_asMMS_SCHEMA_REL6_MM7_1_1_Proxy( 
    IMmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsConstants_get_asMMS_SCHEMA_REL6_MM7_1_1_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsConstants_get_asMMS_SCHEMA_REL6_MM7_1_2_Proxy( 
    IMmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsConstants_get_asMMS_SCHEMA_REL6_MM7_1_2_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsConstants_get_asMMS_SCHEMA_REL6_MM7_1_3_Proxy( 
    IMmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsConstants_get_asMMS_SCHEMA_REL6_MM7_1_3_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsConstants_get_asMMS_MM1FILE_MSENDREQ_Proxy( 
    IMmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsConstants_get_asMMS_MM1FILE_MSENDREQ_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsConstants_get_asMMS_MM1FILE_MRETRIEVECONF_Proxy( 
    IMmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsConstants_get_asMMS_MM1FILE_MRETRIEVECONF_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsConstants_get_asMMS_RECIPIENT_TO_Proxy( 
    IMmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsConstants_get_asMMS_RECIPIENT_TO_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsConstants_get_asMMS_RECIPIENT_CC_Proxy( 
    IMmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsConstants_get_asMMS_RECIPIENT_CC_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsConstants_get_asMMS_RECIPIENT_BCC_Proxy( 
    IMmsConstants __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsConstants_get_asMMS_RECIPIENT_BCC_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);



#endif 	/* __IMmsConstants_INTERFACE_DEFINED__ */


#ifndef __IMmsPermission_INTERFACE_DEFINED__
#define __IMmsPermission_INTERFACE_DEFINED__

/* interface IMmsPermission */
/* [unique][helpstring][dual][uuid][object] */ 


EXTERN_C const IID IID_IMmsPermission;

#if defined(__cplusplus) && !defined(CINTERFACE)
    
    MIDL_INTERFACE("8FABC032-B5CD-4405-85E5-98A8DDEBFC3F")
    IMmsPermission : public IDispatch
    {
    public:
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE Clear( void) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Operation( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_Operation( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Times( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_Times( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Days( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_Days( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_BeginDate( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_BeginDate( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_EndDate( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_EndDate( 
            /* [in] */ BSTR newVal) = 0;
        
    };
    
#else 	/* C style interface */

    typedef struct IMmsPermissionVtbl
    {
        BEGIN_INTERFACE
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *QueryInterface )( 
            IMmsPermission __RPC_FAR * This,
            /* [in] */ REFIID riid,
            /* [iid_is][out] */ void __RPC_FAR *__RPC_FAR *ppvObject);
        
        ULONG ( STDMETHODCALLTYPE __RPC_FAR *AddRef )( 
            IMmsPermission __RPC_FAR * This);
        
        ULONG ( STDMETHODCALLTYPE __RPC_FAR *Release )( 
            IMmsPermission __RPC_FAR * This);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetTypeInfoCount )( 
            IMmsPermission __RPC_FAR * This,
            /* [out] */ UINT __RPC_FAR *pctinfo);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetTypeInfo )( 
            IMmsPermission __RPC_FAR * This,
            /* [in] */ UINT iTInfo,
            /* [in] */ LCID lcid,
            /* [out] */ ITypeInfo __RPC_FAR *__RPC_FAR *ppTInfo);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetIDsOfNames )( 
            IMmsPermission __RPC_FAR * This,
            /* [in] */ REFIID riid,
            /* [size_is][in] */ LPOLESTR __RPC_FAR *rgszNames,
            /* [in] */ UINT cNames,
            /* [in] */ LCID lcid,
            /* [size_is][out] */ DISPID __RPC_FAR *rgDispId);
        
        /* [local] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Invoke )( 
            IMmsPermission __RPC_FAR * This,
            /* [in] */ DISPID dispIdMember,
            /* [in] */ REFIID riid,
            /* [in] */ LCID lcid,
            /* [in] */ WORD wFlags,
            /* [out][in] */ DISPPARAMS __RPC_FAR *pDispParams,
            /* [out] */ VARIANT __RPC_FAR *pVarResult,
            /* [out] */ EXCEPINFO __RPC_FAR *pExcepInfo,
            /* [out] */ UINT __RPC_FAR *puArgErr);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Clear )( 
            IMmsPermission __RPC_FAR * This);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Operation )( 
            IMmsPermission __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_Operation )( 
            IMmsPermission __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Times )( 
            IMmsPermission __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_Times )( 
            IMmsPermission __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Days )( 
            IMmsPermission __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_Days )( 
            IMmsPermission __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_BeginDate )( 
            IMmsPermission __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_BeginDate )( 
            IMmsPermission __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_EndDate )( 
            IMmsPermission __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_EndDate )( 
            IMmsPermission __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        END_INTERFACE
    } IMmsPermissionVtbl;

    interface IMmsPermission
    {
        CONST_VTBL struct IMmsPermissionVtbl __RPC_FAR *lpVtbl;
    };

    

#ifdef COBJMACROS


#define IMmsPermission_QueryInterface(This,riid,ppvObject)	\
    (This)->lpVtbl -> QueryInterface(This,riid,ppvObject)

#define IMmsPermission_AddRef(This)	\
    (This)->lpVtbl -> AddRef(This)

#define IMmsPermission_Release(This)	\
    (This)->lpVtbl -> Release(This)


#define IMmsPermission_GetTypeInfoCount(This,pctinfo)	\
    (This)->lpVtbl -> GetTypeInfoCount(This,pctinfo)

#define IMmsPermission_GetTypeInfo(This,iTInfo,lcid,ppTInfo)	\
    (This)->lpVtbl -> GetTypeInfo(This,iTInfo,lcid,ppTInfo)

#define IMmsPermission_GetIDsOfNames(This,riid,rgszNames,cNames,lcid,rgDispId)	\
    (This)->lpVtbl -> GetIDsOfNames(This,riid,rgszNames,cNames,lcid,rgDispId)

#define IMmsPermission_Invoke(This,dispIdMember,riid,lcid,wFlags,pDispParams,pVarResult,pExcepInfo,puArgErr)	\
    (This)->lpVtbl -> Invoke(This,dispIdMember,riid,lcid,wFlags,pDispParams,pVarResult,pExcepInfo,puArgErr)


#define IMmsPermission_Clear(This)	\
    (This)->lpVtbl -> Clear(This)

#define IMmsPermission_get_Operation(This,pVal)	\
    (This)->lpVtbl -> get_Operation(This,pVal)

#define IMmsPermission_put_Operation(This,newVal)	\
    (This)->lpVtbl -> put_Operation(This,newVal)

#define IMmsPermission_get_Times(This,pVal)	\
    (This)->lpVtbl -> get_Times(This,pVal)

#define IMmsPermission_put_Times(This,newVal)	\
    (This)->lpVtbl -> put_Times(This,newVal)

#define IMmsPermission_get_Days(This,pVal)	\
    (This)->lpVtbl -> get_Days(This,pVal)

#define IMmsPermission_put_Days(This,newVal)	\
    (This)->lpVtbl -> put_Days(This,newVal)

#define IMmsPermission_get_BeginDate(This,pVal)	\
    (This)->lpVtbl -> get_BeginDate(This,pVal)

#define IMmsPermission_put_BeginDate(This,newVal)	\
    (This)->lpVtbl -> put_BeginDate(This,newVal)

#define IMmsPermission_get_EndDate(This,pVal)	\
    (This)->lpVtbl -> get_EndDate(This,pVal)

#define IMmsPermission_put_EndDate(This,newVal)	\
    (This)->lpVtbl -> put_EndDate(This,newVal)

#endif /* COBJMACROS */


#endif 	/* C style interface */



/* [id] */ HRESULT STDMETHODCALLTYPE IMmsPermission_Clear_Proxy( 
    IMmsPermission __RPC_FAR * This);


void __RPC_STUB IMmsPermission_Clear_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsPermission_get_Operation_Proxy( 
    IMmsPermission __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsPermission_get_Operation_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsPermission_put_Operation_Proxy( 
    IMmsPermission __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB IMmsPermission_put_Operation_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsPermission_get_Times_Proxy( 
    IMmsPermission __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsPermission_get_Times_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsPermission_put_Times_Proxy( 
    IMmsPermission __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB IMmsPermission_put_Times_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsPermission_get_Days_Proxy( 
    IMmsPermission __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsPermission_get_Days_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsPermission_put_Days_Proxy( 
    IMmsPermission __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB IMmsPermission_put_Days_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsPermission_get_BeginDate_Proxy( 
    IMmsPermission __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsPermission_get_BeginDate_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsPermission_put_BeginDate_Proxy( 
    IMmsPermission __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB IMmsPermission_put_BeginDate_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsPermission_get_EndDate_Proxy( 
    IMmsPermission __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsPermission_get_EndDate_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsPermission_put_EndDate_Proxy( 
    IMmsPermission __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB IMmsPermission_put_EndDate_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);



#endif 	/* __IMmsPermission_INTERFACE_DEFINED__ */


#ifndef __IMmsProtocolMm4_INTERFACE_DEFINED__
#define __IMmsProtocolMm4_INTERFACE_DEFINED__

/* interface IMmsProtocolMm4 */
/* [unique][helpstring][dual][uuid][object] */ 


EXTERN_C const IID IID_IMmsProtocolMm4;

#if defined(__cplusplus) && !defined(CINTERFACE)
    
    MIDL_INTERFACE("A233DA9D-E345-4909-9D95-DB9ACDEF7D21")
    IMmsProtocolMm4 : public IDispatch
    {
    public:
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_LastError( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Version( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Build( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ExpirationDate( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_Reserved( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_LogFile( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_LogFile( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ActivityFile( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_ActivityFile( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_DistributionID( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_DistributionKey( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE Clear( void) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE GetErrorDescription( 
            LONG newVal,
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE Activate( 
            BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ProviderHost( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_ProviderHost( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ProviderPort( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_ProviderPort( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ProviderAccount( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_ProviderAccount( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ProviderPassword( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_ProviderPassword( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ProviderDomain( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_ProviderDomain( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ProviderMM4Format( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_ProviderMM4Format( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ProviderMM4Version( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_ProviderMM4Version( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_AdvancedSettings( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_AdvancedSettings( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ProviderMessageSizeLimit( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_ProviderMessageSizeLimit( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ProviderResponse( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE Send( 
            VARIANT __RPC_FAR *pVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE ProviderLoadConfig( 
            BSTR bstrConfigFile) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE ProviderSaveConfig( 
            BSTR bstrConfigFile) = 0;
        
    };
    
#else 	/* C style interface */

    typedef struct IMmsProtocolMm4Vtbl
    {
        BEGIN_INTERFACE
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *QueryInterface )( 
            IMmsProtocolMm4 __RPC_FAR * This,
            /* [in] */ REFIID riid,
            /* [iid_is][out] */ void __RPC_FAR *__RPC_FAR *ppvObject);
        
        ULONG ( STDMETHODCALLTYPE __RPC_FAR *AddRef )( 
            IMmsProtocolMm4 __RPC_FAR * This);
        
        ULONG ( STDMETHODCALLTYPE __RPC_FAR *Release )( 
            IMmsProtocolMm4 __RPC_FAR * This);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetTypeInfoCount )( 
            IMmsProtocolMm4 __RPC_FAR * This,
            /* [out] */ UINT __RPC_FAR *pctinfo);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetTypeInfo )( 
            IMmsProtocolMm4 __RPC_FAR * This,
            /* [in] */ UINT iTInfo,
            /* [in] */ LCID lcid,
            /* [out] */ ITypeInfo __RPC_FAR *__RPC_FAR *ppTInfo);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetIDsOfNames )( 
            IMmsProtocolMm4 __RPC_FAR * This,
            /* [in] */ REFIID riid,
            /* [size_is][in] */ LPOLESTR __RPC_FAR *rgszNames,
            /* [in] */ UINT cNames,
            /* [in] */ LCID lcid,
            /* [size_is][out] */ DISPID __RPC_FAR *rgDispId);
        
        /* [local] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Invoke )( 
            IMmsProtocolMm4 __RPC_FAR * This,
            /* [in] */ DISPID dispIdMember,
            /* [in] */ REFIID riid,
            /* [in] */ LCID lcid,
            /* [in] */ WORD wFlags,
            /* [out][in] */ DISPPARAMS __RPC_FAR *pDispParams,
            /* [out] */ VARIANT __RPC_FAR *pVarResult,
            /* [out] */ EXCEPINFO __RPC_FAR *pExcepInfo,
            /* [out] */ UINT __RPC_FAR *puArgErr);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_LastError )( 
            IMmsProtocolMm4 __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Version )( 
            IMmsProtocolMm4 __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Build )( 
            IMmsProtocolMm4 __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ExpirationDate )( 
            IMmsProtocolMm4 __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_Reserved )( 
            IMmsProtocolMm4 __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_LogFile )( 
            IMmsProtocolMm4 __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_LogFile )( 
            IMmsProtocolMm4 __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ActivityFile )( 
            IMmsProtocolMm4 __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_ActivityFile )( 
            IMmsProtocolMm4 __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_DistributionID )( 
            IMmsProtocolMm4 __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_DistributionKey )( 
            IMmsProtocolMm4 __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Clear )( 
            IMmsProtocolMm4 __RPC_FAR * This);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetErrorDescription )( 
            IMmsProtocolMm4 __RPC_FAR * This,
            LONG newVal,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Activate )( 
            IMmsProtocolMm4 __RPC_FAR * This,
            BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ProviderHost )( 
            IMmsProtocolMm4 __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_ProviderHost )( 
            IMmsProtocolMm4 __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ProviderPort )( 
            IMmsProtocolMm4 __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_ProviderPort )( 
            IMmsProtocolMm4 __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ProviderAccount )( 
            IMmsProtocolMm4 __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_ProviderAccount )( 
            IMmsProtocolMm4 __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ProviderPassword )( 
            IMmsProtocolMm4 __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_ProviderPassword )( 
            IMmsProtocolMm4 __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ProviderDomain )( 
            IMmsProtocolMm4 __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_ProviderDomain )( 
            IMmsProtocolMm4 __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ProviderMM4Format )( 
            IMmsProtocolMm4 __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_ProviderMM4Format )( 
            IMmsProtocolMm4 __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ProviderMM4Version )( 
            IMmsProtocolMm4 __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_ProviderMM4Version )( 
            IMmsProtocolMm4 __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_AdvancedSettings )( 
            IMmsProtocolMm4 __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_AdvancedSettings )( 
            IMmsProtocolMm4 __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ProviderMessageSizeLimit )( 
            IMmsProtocolMm4 __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_ProviderMessageSizeLimit )( 
            IMmsProtocolMm4 __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ProviderResponse )( 
            IMmsProtocolMm4 __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Send )( 
            IMmsProtocolMm4 __RPC_FAR * This,
            VARIANT __RPC_FAR *pVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *ProviderLoadConfig )( 
            IMmsProtocolMm4 __RPC_FAR * This,
            BSTR bstrConfigFile);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *ProviderSaveConfig )( 
            IMmsProtocolMm4 __RPC_FAR * This,
            BSTR bstrConfigFile);
        
        END_INTERFACE
    } IMmsProtocolMm4Vtbl;

    interface IMmsProtocolMm4
    {
        CONST_VTBL struct IMmsProtocolMm4Vtbl __RPC_FAR *lpVtbl;
    };

    

#ifdef COBJMACROS


#define IMmsProtocolMm4_QueryInterface(This,riid,ppvObject)	\
    (This)->lpVtbl -> QueryInterface(This,riid,ppvObject)

#define IMmsProtocolMm4_AddRef(This)	\
    (This)->lpVtbl -> AddRef(This)

#define IMmsProtocolMm4_Release(This)	\
    (This)->lpVtbl -> Release(This)


#define IMmsProtocolMm4_GetTypeInfoCount(This,pctinfo)	\
    (This)->lpVtbl -> GetTypeInfoCount(This,pctinfo)

#define IMmsProtocolMm4_GetTypeInfo(This,iTInfo,lcid,ppTInfo)	\
    (This)->lpVtbl -> GetTypeInfo(This,iTInfo,lcid,ppTInfo)

#define IMmsProtocolMm4_GetIDsOfNames(This,riid,rgszNames,cNames,lcid,rgDispId)	\
    (This)->lpVtbl -> GetIDsOfNames(This,riid,rgszNames,cNames,lcid,rgDispId)

#define IMmsProtocolMm4_Invoke(This,dispIdMember,riid,lcid,wFlags,pDispParams,pVarResult,pExcepInfo,puArgErr)	\
    (This)->lpVtbl -> Invoke(This,dispIdMember,riid,lcid,wFlags,pDispParams,pVarResult,pExcepInfo,puArgErr)


#define IMmsProtocolMm4_get_LastError(This,pVal)	\
    (This)->lpVtbl -> get_LastError(This,pVal)

#define IMmsProtocolMm4_get_Version(This,pVal)	\
    (This)->lpVtbl -> get_Version(This,pVal)

#define IMmsProtocolMm4_get_Build(This,pVal)	\
    (This)->lpVtbl -> get_Build(This,pVal)

#define IMmsProtocolMm4_get_ExpirationDate(This,pVal)	\
    (This)->lpVtbl -> get_ExpirationDate(This,pVal)

#define IMmsProtocolMm4_put_Reserved(This,newVal)	\
    (This)->lpVtbl -> put_Reserved(This,newVal)

#define IMmsProtocolMm4_get_LogFile(This,pVal)	\
    (This)->lpVtbl -> get_LogFile(This,pVal)

#define IMmsProtocolMm4_put_LogFile(This,newVal)	\
    (This)->lpVtbl -> put_LogFile(This,newVal)

#define IMmsProtocolMm4_get_ActivityFile(This,pVal)	\
    (This)->lpVtbl -> get_ActivityFile(This,pVal)

#define IMmsProtocolMm4_put_ActivityFile(This,newVal)	\
    (This)->lpVtbl -> put_ActivityFile(This,newVal)

#define IMmsProtocolMm4_put_DistributionID(This,newVal)	\
    (This)->lpVtbl -> put_DistributionID(This,newVal)

#define IMmsProtocolMm4_put_DistributionKey(This,newVal)	\
    (This)->lpVtbl -> put_DistributionKey(This,newVal)

#define IMmsProtocolMm4_Clear(This)	\
    (This)->lpVtbl -> Clear(This)

#define IMmsProtocolMm4_GetErrorDescription(This,newVal,pVal)	\
    (This)->lpVtbl -> GetErrorDescription(This,newVal,pVal)

#define IMmsProtocolMm4_Activate(This,newVal)	\
    (This)->lpVtbl -> Activate(This,newVal)

#define IMmsProtocolMm4_get_ProviderHost(This,pVal)	\
    (This)->lpVtbl -> get_ProviderHost(This,pVal)

#define IMmsProtocolMm4_put_ProviderHost(This,newVal)	\
    (This)->lpVtbl -> put_ProviderHost(This,newVal)

#define IMmsProtocolMm4_get_ProviderPort(This,pVal)	\
    (This)->lpVtbl -> get_ProviderPort(This,pVal)

#define IMmsProtocolMm4_put_ProviderPort(This,newVal)	\
    (This)->lpVtbl -> put_ProviderPort(This,newVal)

#define IMmsProtocolMm4_get_ProviderAccount(This,pVal)	\
    (This)->lpVtbl -> get_ProviderAccount(This,pVal)

#define IMmsProtocolMm4_put_ProviderAccount(This,newVal)	\
    (This)->lpVtbl -> put_ProviderAccount(This,newVal)

#define IMmsProtocolMm4_get_ProviderPassword(This,pVal)	\
    (This)->lpVtbl -> get_ProviderPassword(This,pVal)

#define IMmsProtocolMm4_put_ProviderPassword(This,newVal)	\
    (This)->lpVtbl -> put_ProviderPassword(This,newVal)

#define IMmsProtocolMm4_get_ProviderDomain(This,pVal)	\
    (This)->lpVtbl -> get_ProviderDomain(This,pVal)

#define IMmsProtocolMm4_put_ProviderDomain(This,newVal)	\
    (This)->lpVtbl -> put_ProviderDomain(This,newVal)

#define IMmsProtocolMm4_get_ProviderMM4Format(This,pVal)	\
    (This)->lpVtbl -> get_ProviderMM4Format(This,pVal)

#define IMmsProtocolMm4_put_ProviderMM4Format(This,newVal)	\
    (This)->lpVtbl -> put_ProviderMM4Format(This,newVal)

#define IMmsProtocolMm4_get_ProviderMM4Version(This,pVal)	\
    (This)->lpVtbl -> get_ProviderMM4Version(This,pVal)

#define IMmsProtocolMm4_put_ProviderMM4Version(This,newVal)	\
    (This)->lpVtbl -> put_ProviderMM4Version(This,newVal)

#define IMmsProtocolMm4_get_AdvancedSettings(This,pVal)	\
    (This)->lpVtbl -> get_AdvancedSettings(This,pVal)

#define IMmsProtocolMm4_put_AdvancedSettings(This,newVal)	\
    (This)->lpVtbl -> put_AdvancedSettings(This,newVal)

#define IMmsProtocolMm4_get_ProviderMessageSizeLimit(This,pVal)	\
    (This)->lpVtbl -> get_ProviderMessageSizeLimit(This,pVal)

#define IMmsProtocolMm4_put_ProviderMessageSizeLimit(This,newVal)	\
    (This)->lpVtbl -> put_ProviderMessageSizeLimit(This,newVal)

#define IMmsProtocolMm4_get_ProviderResponse(This,pVal)	\
    (This)->lpVtbl -> get_ProviderResponse(This,pVal)

#define IMmsProtocolMm4_Send(This,pVal)	\
    (This)->lpVtbl -> Send(This,pVal)

#define IMmsProtocolMm4_ProviderLoadConfig(This,bstrConfigFile)	\
    (This)->lpVtbl -> ProviderLoadConfig(This,bstrConfigFile)

#define IMmsProtocolMm4_ProviderSaveConfig(This,bstrConfigFile)	\
    (This)->lpVtbl -> ProviderSaveConfig(This,bstrConfigFile)

#endif /* COBJMACROS */


#endif 	/* C style interface */



/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm4_get_LastError_Proxy( 
    IMmsProtocolMm4 __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm4_get_LastError_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm4_get_Version_Proxy( 
    IMmsProtocolMm4 __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm4_get_Version_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm4_get_Build_Proxy( 
    IMmsProtocolMm4 __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm4_get_Build_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm4_get_ExpirationDate_Proxy( 
    IMmsProtocolMm4 __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm4_get_ExpirationDate_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm4_put_Reserved_Proxy( 
    IMmsProtocolMm4 __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB IMmsProtocolMm4_put_Reserved_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm4_get_LogFile_Proxy( 
    IMmsProtocolMm4 __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm4_get_LogFile_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm4_put_LogFile_Proxy( 
    IMmsProtocolMm4 __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB IMmsProtocolMm4_put_LogFile_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm4_get_ActivityFile_Proxy( 
    IMmsProtocolMm4 __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm4_get_ActivityFile_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm4_put_ActivityFile_Proxy( 
    IMmsProtocolMm4 __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB IMmsProtocolMm4_put_ActivityFile_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm4_put_DistributionID_Proxy( 
    IMmsProtocolMm4 __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB IMmsProtocolMm4_put_DistributionID_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm4_put_DistributionKey_Proxy( 
    IMmsProtocolMm4 __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB IMmsProtocolMm4_put_DistributionKey_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm4_Clear_Proxy( 
    IMmsProtocolMm4 __RPC_FAR * This);


void __RPC_STUB IMmsProtocolMm4_Clear_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm4_GetErrorDescription_Proxy( 
    IMmsProtocolMm4 __RPC_FAR * This,
    LONG newVal,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm4_GetErrorDescription_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm4_Activate_Proxy( 
    IMmsProtocolMm4 __RPC_FAR * This,
    BSTR newVal);


void __RPC_STUB IMmsProtocolMm4_Activate_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm4_get_ProviderHost_Proxy( 
    IMmsProtocolMm4 __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm4_get_ProviderHost_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm4_put_ProviderHost_Proxy( 
    IMmsProtocolMm4 __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB IMmsProtocolMm4_put_ProviderHost_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm4_get_ProviderPort_Proxy( 
    IMmsProtocolMm4 __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm4_get_ProviderPort_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm4_put_ProviderPort_Proxy( 
    IMmsProtocolMm4 __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB IMmsProtocolMm4_put_ProviderPort_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm4_get_ProviderAccount_Proxy( 
    IMmsProtocolMm4 __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm4_get_ProviderAccount_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm4_put_ProviderAccount_Proxy( 
    IMmsProtocolMm4 __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB IMmsProtocolMm4_put_ProviderAccount_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm4_get_ProviderPassword_Proxy( 
    IMmsProtocolMm4 __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm4_get_ProviderPassword_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm4_put_ProviderPassword_Proxy( 
    IMmsProtocolMm4 __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB IMmsProtocolMm4_put_ProviderPassword_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm4_get_ProviderDomain_Proxy( 
    IMmsProtocolMm4 __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm4_get_ProviderDomain_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm4_put_ProviderDomain_Proxy( 
    IMmsProtocolMm4 __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB IMmsProtocolMm4_put_ProviderDomain_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm4_get_ProviderMM4Format_Proxy( 
    IMmsProtocolMm4 __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm4_get_ProviderMM4Format_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm4_put_ProviderMM4Format_Proxy( 
    IMmsProtocolMm4 __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB IMmsProtocolMm4_put_ProviderMM4Format_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm4_get_ProviderMM4Version_Proxy( 
    IMmsProtocolMm4 __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm4_get_ProviderMM4Version_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm4_put_ProviderMM4Version_Proxy( 
    IMmsProtocolMm4 __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB IMmsProtocolMm4_put_ProviderMM4Version_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm4_get_AdvancedSettings_Proxy( 
    IMmsProtocolMm4 __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm4_get_AdvancedSettings_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm4_put_AdvancedSettings_Proxy( 
    IMmsProtocolMm4 __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB IMmsProtocolMm4_put_AdvancedSettings_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm4_get_ProviderMessageSizeLimit_Proxy( 
    IMmsProtocolMm4 __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm4_get_ProviderMessageSizeLimit_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm4_put_ProviderMessageSizeLimit_Proxy( 
    IMmsProtocolMm4 __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB IMmsProtocolMm4_put_ProviderMessageSizeLimit_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm4_get_ProviderResponse_Proxy( 
    IMmsProtocolMm4 __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm4_get_ProviderResponse_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm4_Send_Proxy( 
    IMmsProtocolMm4 __RPC_FAR * This,
    VARIANT __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm4_Send_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm4_ProviderLoadConfig_Proxy( 
    IMmsProtocolMm4 __RPC_FAR * This,
    BSTR bstrConfigFile);


void __RPC_STUB IMmsProtocolMm4_ProviderLoadConfig_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm4_ProviderSaveConfig_Proxy( 
    IMmsProtocolMm4 __RPC_FAR * This,
    BSTR bstrConfigFile);


void __RPC_STUB IMmsProtocolMm4_ProviderSaveConfig_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);



#endif 	/* __IMmsProtocolMm4_INTERFACE_DEFINED__ */


#ifndef __IMmsProtocolMm7_INTERFACE_DEFINED__
#define __IMmsProtocolMm7_INTERFACE_DEFINED__

/* interface IMmsProtocolMm7 */
/* [unique][helpstring][dual][uuid][object] */ 


EXTERN_C const IID IID_IMmsProtocolMm7;

#if defined(__cplusplus) && !defined(CINTERFACE)
    
    MIDL_INTERFACE("EA67C0B2-CB9F-4D3F-B50F-A7CE1CEF346A")
    IMmsProtocolMm7 : public IDispatch
    {
    public:
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_LastError( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Version( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Build( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ExpirationDate( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_Reserved( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_LogFile( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_LogFile( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ActivityFile( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_ActivityFile( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_DistributionID( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_DistributionKey( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE Clear( void) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE GetErrorDescription( 
            LONG newVal,
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE Activate( 
            BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ProviderURL( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_ProviderURL( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ProviderWebAccount( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_ProviderWebAccount( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ProviderWebPassword( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_ProviderWebPassword( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ProxyServer( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_ProxyServer( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ProxyAccount( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_ProxyAccount( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ProxyPassword( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_ProxyPassword( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ProviderResponse( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_MessageID( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ProviderUseSSL( 
            /* [retval][out] */ BOOL __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_ProviderUseSSL( 
            /* [in] */ BOOL newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ProviderVASID( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_ProviderVASID( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ProviderVASPID( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_ProviderVASPID( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ProviderServiceCode( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_ProviderServiceCode( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ProviderMM7Version( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_ProviderMM7Version( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ProviderMM7Schema( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_ProviderMM7Schema( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ProvidersFolder( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ProviderMM7Variation( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_ProviderMM7Variation( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ProviderMessageSizeLimit( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_ProviderMessageSizeLimit( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_AdvancedSettings( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_AdvancedSettings( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE Send( 
            VARIANT __RPC_FAR *pVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE ProviderLoadConfig( 
            BSTR bstrFile) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE ProviderSaveConfig( 
            BSTR bstrFile) = 0;
        
    };
    
#else 	/* C style interface */

    typedef struct IMmsProtocolMm7Vtbl
    {
        BEGIN_INTERFACE
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *QueryInterface )( 
            IMmsProtocolMm7 __RPC_FAR * This,
            /* [in] */ REFIID riid,
            /* [iid_is][out] */ void __RPC_FAR *__RPC_FAR *ppvObject);
        
        ULONG ( STDMETHODCALLTYPE __RPC_FAR *AddRef )( 
            IMmsProtocolMm7 __RPC_FAR * This);
        
        ULONG ( STDMETHODCALLTYPE __RPC_FAR *Release )( 
            IMmsProtocolMm7 __RPC_FAR * This);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetTypeInfoCount )( 
            IMmsProtocolMm7 __RPC_FAR * This,
            /* [out] */ UINT __RPC_FAR *pctinfo);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetTypeInfo )( 
            IMmsProtocolMm7 __RPC_FAR * This,
            /* [in] */ UINT iTInfo,
            /* [in] */ LCID lcid,
            /* [out] */ ITypeInfo __RPC_FAR *__RPC_FAR *ppTInfo);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetIDsOfNames )( 
            IMmsProtocolMm7 __RPC_FAR * This,
            /* [in] */ REFIID riid,
            /* [size_is][in] */ LPOLESTR __RPC_FAR *rgszNames,
            /* [in] */ UINT cNames,
            /* [in] */ LCID lcid,
            /* [size_is][out] */ DISPID __RPC_FAR *rgDispId);
        
        /* [local] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Invoke )( 
            IMmsProtocolMm7 __RPC_FAR * This,
            /* [in] */ DISPID dispIdMember,
            /* [in] */ REFIID riid,
            /* [in] */ LCID lcid,
            /* [in] */ WORD wFlags,
            /* [out][in] */ DISPPARAMS __RPC_FAR *pDispParams,
            /* [out] */ VARIANT __RPC_FAR *pVarResult,
            /* [out] */ EXCEPINFO __RPC_FAR *pExcepInfo,
            /* [out] */ UINT __RPC_FAR *puArgErr);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_LastError )( 
            IMmsProtocolMm7 __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Version )( 
            IMmsProtocolMm7 __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Build )( 
            IMmsProtocolMm7 __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ExpirationDate )( 
            IMmsProtocolMm7 __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_Reserved )( 
            IMmsProtocolMm7 __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_LogFile )( 
            IMmsProtocolMm7 __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_LogFile )( 
            IMmsProtocolMm7 __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ActivityFile )( 
            IMmsProtocolMm7 __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_ActivityFile )( 
            IMmsProtocolMm7 __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_DistributionID )( 
            IMmsProtocolMm7 __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_DistributionKey )( 
            IMmsProtocolMm7 __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Clear )( 
            IMmsProtocolMm7 __RPC_FAR * This);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetErrorDescription )( 
            IMmsProtocolMm7 __RPC_FAR * This,
            LONG newVal,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Activate )( 
            IMmsProtocolMm7 __RPC_FAR * This,
            BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ProviderURL )( 
            IMmsProtocolMm7 __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_ProviderURL )( 
            IMmsProtocolMm7 __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ProviderWebAccount )( 
            IMmsProtocolMm7 __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_ProviderWebAccount )( 
            IMmsProtocolMm7 __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ProviderWebPassword )( 
            IMmsProtocolMm7 __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_ProviderWebPassword )( 
            IMmsProtocolMm7 __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ProxyServer )( 
            IMmsProtocolMm7 __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_ProxyServer )( 
            IMmsProtocolMm7 __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ProxyAccount )( 
            IMmsProtocolMm7 __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_ProxyAccount )( 
            IMmsProtocolMm7 __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ProxyPassword )( 
            IMmsProtocolMm7 __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_ProxyPassword )( 
            IMmsProtocolMm7 __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ProviderResponse )( 
            IMmsProtocolMm7 __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_MessageID )( 
            IMmsProtocolMm7 __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ProviderUseSSL )( 
            IMmsProtocolMm7 __RPC_FAR * This,
            /* [retval][out] */ BOOL __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_ProviderUseSSL )( 
            IMmsProtocolMm7 __RPC_FAR * This,
            /* [in] */ BOOL newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ProviderVASID )( 
            IMmsProtocolMm7 __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_ProviderVASID )( 
            IMmsProtocolMm7 __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ProviderVASPID )( 
            IMmsProtocolMm7 __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_ProviderVASPID )( 
            IMmsProtocolMm7 __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ProviderServiceCode )( 
            IMmsProtocolMm7 __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_ProviderServiceCode )( 
            IMmsProtocolMm7 __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ProviderMM7Version )( 
            IMmsProtocolMm7 __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_ProviderMM7Version )( 
            IMmsProtocolMm7 __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ProviderMM7Schema )( 
            IMmsProtocolMm7 __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_ProviderMM7Schema )( 
            IMmsProtocolMm7 __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ProvidersFolder )( 
            IMmsProtocolMm7 __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ProviderMM7Variation )( 
            IMmsProtocolMm7 __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_ProviderMM7Variation )( 
            IMmsProtocolMm7 __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ProviderMessageSizeLimit )( 
            IMmsProtocolMm7 __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_ProviderMessageSizeLimit )( 
            IMmsProtocolMm7 __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_AdvancedSettings )( 
            IMmsProtocolMm7 __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_AdvancedSettings )( 
            IMmsProtocolMm7 __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Send )( 
            IMmsProtocolMm7 __RPC_FAR * This,
            VARIANT __RPC_FAR *pVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *ProviderLoadConfig )( 
            IMmsProtocolMm7 __RPC_FAR * This,
            BSTR bstrFile);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *ProviderSaveConfig )( 
            IMmsProtocolMm7 __RPC_FAR * This,
            BSTR bstrFile);
        
        END_INTERFACE
    } IMmsProtocolMm7Vtbl;

    interface IMmsProtocolMm7
    {
        CONST_VTBL struct IMmsProtocolMm7Vtbl __RPC_FAR *lpVtbl;
    };

    

#ifdef COBJMACROS


#define IMmsProtocolMm7_QueryInterface(This,riid,ppvObject)	\
    (This)->lpVtbl -> QueryInterface(This,riid,ppvObject)

#define IMmsProtocolMm7_AddRef(This)	\
    (This)->lpVtbl -> AddRef(This)

#define IMmsProtocolMm7_Release(This)	\
    (This)->lpVtbl -> Release(This)


#define IMmsProtocolMm7_GetTypeInfoCount(This,pctinfo)	\
    (This)->lpVtbl -> GetTypeInfoCount(This,pctinfo)

#define IMmsProtocolMm7_GetTypeInfo(This,iTInfo,lcid,ppTInfo)	\
    (This)->lpVtbl -> GetTypeInfo(This,iTInfo,lcid,ppTInfo)

#define IMmsProtocolMm7_GetIDsOfNames(This,riid,rgszNames,cNames,lcid,rgDispId)	\
    (This)->lpVtbl -> GetIDsOfNames(This,riid,rgszNames,cNames,lcid,rgDispId)

#define IMmsProtocolMm7_Invoke(This,dispIdMember,riid,lcid,wFlags,pDispParams,pVarResult,pExcepInfo,puArgErr)	\
    (This)->lpVtbl -> Invoke(This,dispIdMember,riid,lcid,wFlags,pDispParams,pVarResult,pExcepInfo,puArgErr)


#define IMmsProtocolMm7_get_LastError(This,pVal)	\
    (This)->lpVtbl -> get_LastError(This,pVal)

#define IMmsProtocolMm7_get_Version(This,pVal)	\
    (This)->lpVtbl -> get_Version(This,pVal)

#define IMmsProtocolMm7_get_Build(This,pVal)	\
    (This)->lpVtbl -> get_Build(This,pVal)

#define IMmsProtocolMm7_get_ExpirationDate(This,pVal)	\
    (This)->lpVtbl -> get_ExpirationDate(This,pVal)

#define IMmsProtocolMm7_put_Reserved(This,newVal)	\
    (This)->lpVtbl -> put_Reserved(This,newVal)

#define IMmsProtocolMm7_get_LogFile(This,pVal)	\
    (This)->lpVtbl -> get_LogFile(This,pVal)

#define IMmsProtocolMm7_put_LogFile(This,newVal)	\
    (This)->lpVtbl -> put_LogFile(This,newVal)

#define IMmsProtocolMm7_get_ActivityFile(This,pVal)	\
    (This)->lpVtbl -> get_ActivityFile(This,pVal)

#define IMmsProtocolMm7_put_ActivityFile(This,newVal)	\
    (This)->lpVtbl -> put_ActivityFile(This,newVal)

#define IMmsProtocolMm7_put_DistributionID(This,newVal)	\
    (This)->lpVtbl -> put_DistributionID(This,newVal)

#define IMmsProtocolMm7_put_DistributionKey(This,newVal)	\
    (This)->lpVtbl -> put_DistributionKey(This,newVal)

#define IMmsProtocolMm7_Clear(This)	\
    (This)->lpVtbl -> Clear(This)

#define IMmsProtocolMm7_GetErrorDescription(This,newVal,pVal)	\
    (This)->lpVtbl -> GetErrorDescription(This,newVal,pVal)

#define IMmsProtocolMm7_Activate(This,newVal)	\
    (This)->lpVtbl -> Activate(This,newVal)

#define IMmsProtocolMm7_get_ProviderURL(This,pVal)	\
    (This)->lpVtbl -> get_ProviderURL(This,pVal)

#define IMmsProtocolMm7_put_ProviderURL(This,newVal)	\
    (This)->lpVtbl -> put_ProviderURL(This,newVal)

#define IMmsProtocolMm7_get_ProviderWebAccount(This,pVal)	\
    (This)->lpVtbl -> get_ProviderWebAccount(This,pVal)

#define IMmsProtocolMm7_put_ProviderWebAccount(This,newVal)	\
    (This)->lpVtbl -> put_ProviderWebAccount(This,newVal)

#define IMmsProtocolMm7_get_ProviderWebPassword(This,pVal)	\
    (This)->lpVtbl -> get_ProviderWebPassword(This,pVal)

#define IMmsProtocolMm7_put_ProviderWebPassword(This,newVal)	\
    (This)->lpVtbl -> put_ProviderWebPassword(This,newVal)

#define IMmsProtocolMm7_get_ProxyServer(This,pVal)	\
    (This)->lpVtbl -> get_ProxyServer(This,pVal)

#define IMmsProtocolMm7_put_ProxyServer(This,newVal)	\
    (This)->lpVtbl -> put_ProxyServer(This,newVal)

#define IMmsProtocolMm7_get_ProxyAccount(This,pVal)	\
    (This)->lpVtbl -> get_ProxyAccount(This,pVal)

#define IMmsProtocolMm7_put_ProxyAccount(This,newVal)	\
    (This)->lpVtbl -> put_ProxyAccount(This,newVal)

#define IMmsProtocolMm7_get_ProxyPassword(This,pVal)	\
    (This)->lpVtbl -> get_ProxyPassword(This,pVal)

#define IMmsProtocolMm7_put_ProxyPassword(This,newVal)	\
    (This)->lpVtbl -> put_ProxyPassword(This,newVal)

#define IMmsProtocolMm7_get_ProviderResponse(This,pVal)	\
    (This)->lpVtbl -> get_ProviderResponse(This,pVal)

#define IMmsProtocolMm7_get_MessageID(This,pVal)	\
    (This)->lpVtbl -> get_MessageID(This,pVal)

#define IMmsProtocolMm7_get_ProviderUseSSL(This,pVal)	\
    (This)->lpVtbl -> get_ProviderUseSSL(This,pVal)

#define IMmsProtocolMm7_put_ProviderUseSSL(This,newVal)	\
    (This)->lpVtbl -> put_ProviderUseSSL(This,newVal)

#define IMmsProtocolMm7_get_ProviderVASID(This,pVal)	\
    (This)->lpVtbl -> get_ProviderVASID(This,pVal)

#define IMmsProtocolMm7_put_ProviderVASID(This,newVal)	\
    (This)->lpVtbl -> put_ProviderVASID(This,newVal)

#define IMmsProtocolMm7_get_ProviderVASPID(This,pVal)	\
    (This)->lpVtbl -> get_ProviderVASPID(This,pVal)

#define IMmsProtocolMm7_put_ProviderVASPID(This,newVal)	\
    (This)->lpVtbl -> put_ProviderVASPID(This,newVal)

#define IMmsProtocolMm7_get_ProviderServiceCode(This,pVal)	\
    (This)->lpVtbl -> get_ProviderServiceCode(This,pVal)

#define IMmsProtocolMm7_put_ProviderServiceCode(This,newVal)	\
    (This)->lpVtbl -> put_ProviderServiceCode(This,newVal)

#define IMmsProtocolMm7_get_ProviderMM7Version(This,pVal)	\
    (This)->lpVtbl -> get_ProviderMM7Version(This,pVal)

#define IMmsProtocolMm7_put_ProviderMM7Version(This,newVal)	\
    (This)->lpVtbl -> put_ProviderMM7Version(This,newVal)

#define IMmsProtocolMm7_get_ProviderMM7Schema(This,pVal)	\
    (This)->lpVtbl -> get_ProviderMM7Schema(This,pVal)

#define IMmsProtocolMm7_put_ProviderMM7Schema(This,newVal)	\
    (This)->lpVtbl -> put_ProviderMM7Schema(This,newVal)

#define IMmsProtocolMm7_get_ProvidersFolder(This,pVal)	\
    (This)->lpVtbl -> get_ProvidersFolder(This,pVal)

#define IMmsProtocolMm7_get_ProviderMM7Variation(This,pVal)	\
    (This)->lpVtbl -> get_ProviderMM7Variation(This,pVal)

#define IMmsProtocolMm7_put_ProviderMM7Variation(This,newVal)	\
    (This)->lpVtbl -> put_ProviderMM7Variation(This,newVal)

#define IMmsProtocolMm7_get_ProviderMessageSizeLimit(This,pVal)	\
    (This)->lpVtbl -> get_ProviderMessageSizeLimit(This,pVal)

#define IMmsProtocolMm7_put_ProviderMessageSizeLimit(This,newVal)	\
    (This)->lpVtbl -> put_ProviderMessageSizeLimit(This,newVal)

#define IMmsProtocolMm7_get_AdvancedSettings(This,pVal)	\
    (This)->lpVtbl -> get_AdvancedSettings(This,pVal)

#define IMmsProtocolMm7_put_AdvancedSettings(This,newVal)	\
    (This)->lpVtbl -> put_AdvancedSettings(This,newVal)

#define IMmsProtocolMm7_Send(This,pVal)	\
    (This)->lpVtbl -> Send(This,pVal)

#define IMmsProtocolMm7_ProviderLoadConfig(This,bstrFile)	\
    (This)->lpVtbl -> ProviderLoadConfig(This,bstrFile)

#define IMmsProtocolMm7_ProviderSaveConfig(This,bstrFile)	\
    (This)->lpVtbl -> ProviderSaveConfig(This,bstrFile)

#endif /* COBJMACROS */


#endif 	/* C style interface */



/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm7_get_LastError_Proxy( 
    IMmsProtocolMm7 __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm7_get_LastError_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm7_get_Version_Proxy( 
    IMmsProtocolMm7 __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm7_get_Version_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm7_get_Build_Proxy( 
    IMmsProtocolMm7 __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm7_get_Build_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm7_get_ExpirationDate_Proxy( 
    IMmsProtocolMm7 __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm7_get_ExpirationDate_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm7_put_Reserved_Proxy( 
    IMmsProtocolMm7 __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB IMmsProtocolMm7_put_Reserved_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm7_get_LogFile_Proxy( 
    IMmsProtocolMm7 __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm7_get_LogFile_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm7_put_LogFile_Proxy( 
    IMmsProtocolMm7 __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB IMmsProtocolMm7_put_LogFile_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm7_get_ActivityFile_Proxy( 
    IMmsProtocolMm7 __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm7_get_ActivityFile_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm7_put_ActivityFile_Proxy( 
    IMmsProtocolMm7 __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB IMmsProtocolMm7_put_ActivityFile_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm7_put_DistributionID_Proxy( 
    IMmsProtocolMm7 __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB IMmsProtocolMm7_put_DistributionID_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm7_put_DistributionKey_Proxy( 
    IMmsProtocolMm7 __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB IMmsProtocolMm7_put_DistributionKey_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm7_Clear_Proxy( 
    IMmsProtocolMm7 __RPC_FAR * This);


void __RPC_STUB IMmsProtocolMm7_Clear_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm7_GetErrorDescription_Proxy( 
    IMmsProtocolMm7 __RPC_FAR * This,
    LONG newVal,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm7_GetErrorDescription_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm7_Activate_Proxy( 
    IMmsProtocolMm7 __RPC_FAR * This,
    BSTR newVal);


void __RPC_STUB IMmsProtocolMm7_Activate_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm7_get_ProviderURL_Proxy( 
    IMmsProtocolMm7 __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm7_get_ProviderURL_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm7_put_ProviderURL_Proxy( 
    IMmsProtocolMm7 __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB IMmsProtocolMm7_put_ProviderURL_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm7_get_ProviderWebAccount_Proxy( 
    IMmsProtocolMm7 __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm7_get_ProviderWebAccount_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm7_put_ProviderWebAccount_Proxy( 
    IMmsProtocolMm7 __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB IMmsProtocolMm7_put_ProviderWebAccount_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm7_get_ProviderWebPassword_Proxy( 
    IMmsProtocolMm7 __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm7_get_ProviderWebPassword_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm7_put_ProviderWebPassword_Proxy( 
    IMmsProtocolMm7 __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB IMmsProtocolMm7_put_ProviderWebPassword_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm7_get_ProxyServer_Proxy( 
    IMmsProtocolMm7 __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm7_get_ProxyServer_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm7_put_ProxyServer_Proxy( 
    IMmsProtocolMm7 __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB IMmsProtocolMm7_put_ProxyServer_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm7_get_ProxyAccount_Proxy( 
    IMmsProtocolMm7 __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm7_get_ProxyAccount_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm7_put_ProxyAccount_Proxy( 
    IMmsProtocolMm7 __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB IMmsProtocolMm7_put_ProxyAccount_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm7_get_ProxyPassword_Proxy( 
    IMmsProtocolMm7 __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm7_get_ProxyPassword_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm7_put_ProxyPassword_Proxy( 
    IMmsProtocolMm7 __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB IMmsProtocolMm7_put_ProxyPassword_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm7_get_ProviderResponse_Proxy( 
    IMmsProtocolMm7 __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm7_get_ProviderResponse_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm7_get_MessageID_Proxy( 
    IMmsProtocolMm7 __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm7_get_MessageID_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm7_get_ProviderUseSSL_Proxy( 
    IMmsProtocolMm7 __RPC_FAR * This,
    /* [retval][out] */ BOOL __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm7_get_ProviderUseSSL_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm7_put_ProviderUseSSL_Proxy( 
    IMmsProtocolMm7 __RPC_FAR * This,
    /* [in] */ BOOL newVal);


void __RPC_STUB IMmsProtocolMm7_put_ProviderUseSSL_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm7_get_ProviderVASID_Proxy( 
    IMmsProtocolMm7 __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm7_get_ProviderVASID_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm7_put_ProviderVASID_Proxy( 
    IMmsProtocolMm7 __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB IMmsProtocolMm7_put_ProviderVASID_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm7_get_ProviderVASPID_Proxy( 
    IMmsProtocolMm7 __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm7_get_ProviderVASPID_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm7_put_ProviderVASPID_Proxy( 
    IMmsProtocolMm7 __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB IMmsProtocolMm7_put_ProviderVASPID_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm7_get_ProviderServiceCode_Proxy( 
    IMmsProtocolMm7 __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm7_get_ProviderServiceCode_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm7_put_ProviderServiceCode_Proxy( 
    IMmsProtocolMm7 __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB IMmsProtocolMm7_put_ProviderServiceCode_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm7_get_ProviderMM7Version_Proxy( 
    IMmsProtocolMm7 __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm7_get_ProviderMM7Version_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm7_put_ProviderMM7Version_Proxy( 
    IMmsProtocolMm7 __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB IMmsProtocolMm7_put_ProviderMM7Version_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm7_get_ProviderMM7Schema_Proxy( 
    IMmsProtocolMm7 __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm7_get_ProviderMM7Schema_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm7_put_ProviderMM7Schema_Proxy( 
    IMmsProtocolMm7 __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB IMmsProtocolMm7_put_ProviderMM7Schema_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm7_get_ProvidersFolder_Proxy( 
    IMmsProtocolMm7 __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm7_get_ProvidersFolder_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm7_get_ProviderMM7Variation_Proxy( 
    IMmsProtocolMm7 __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm7_get_ProviderMM7Variation_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm7_put_ProviderMM7Variation_Proxy( 
    IMmsProtocolMm7 __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB IMmsProtocolMm7_put_ProviderMM7Variation_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm7_get_ProviderMessageSizeLimit_Proxy( 
    IMmsProtocolMm7 __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm7_get_ProviderMessageSizeLimit_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm7_put_ProviderMessageSizeLimit_Proxy( 
    IMmsProtocolMm7 __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB IMmsProtocolMm7_put_ProviderMessageSizeLimit_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm7_get_AdvancedSettings_Proxy( 
    IMmsProtocolMm7 __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm7_get_AdvancedSettings_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm7_put_AdvancedSettings_Proxy( 
    IMmsProtocolMm7 __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB IMmsProtocolMm7_put_AdvancedSettings_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm7_Send_Proxy( 
    IMmsProtocolMm7 __RPC_FAR * This,
    VARIANT __RPC_FAR *pVal);


void __RPC_STUB IMmsProtocolMm7_Send_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm7_ProviderLoadConfig_Proxy( 
    IMmsProtocolMm7 __RPC_FAR * This,
    BSTR bstrFile);


void __RPC_STUB IMmsProtocolMm7_ProviderLoadConfig_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE IMmsProtocolMm7_ProviderSaveConfig_Proxy( 
    IMmsProtocolMm7 __RPC_FAR * This,
    BSTR bstrFile);


void __RPC_STUB IMmsProtocolMm7_ProviderSaveConfig_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);



#endif 	/* __IMmsProtocolMm7_INTERFACE_DEFINED__ */


#ifndef __IMmsMessage_INTERFACE_DEFINED__
#define __IMmsMessage_INTERFACE_DEFINED__

/* interface IMmsMessage */
/* [unique][helpstring][dual][uuid][object] */ 


EXTERN_C const IID IID_IMmsMessage;

#if defined(__cplusplus) && !defined(CINTERFACE)
    
    MIDL_INTERFACE("BEBE8D74-8123-4D0C-A710-997AF5666166")
    IMmsMessage : public IDispatch
    {
    public:
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_LastError( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Version( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Build( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ExpirationDate( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_Reserved( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_DistributionID( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_DistributionKey( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE Clear( void) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE GetErrorDescription( 
            LONG newVal,
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE Activate( 
            BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_From( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_From( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Class( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_Class( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Priority( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_Priority( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Subject( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_Subject( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_EncodedMessage( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_EncodedMessage( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_RequestReadReceipt( 
            /* [retval][out] */ BOOL __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_RequestReadReceipt( 
            /* [in] */ BOOL newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_RequestDeliveryReport( 
            /* [retval][out] */ BOOL __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_RequestDeliveryReport( 
            /* [in] */ BOOL newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Protocol( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_Protocol( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_TransactionId( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_TransactionId( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_sysBoundary( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_sysSettings( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE SaveToFile( 
            /* [in] */ BSTR bstrFolder,
            /* [in] */ LONG lFormat) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE EncodeMessage( void) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE DecodeMessage( void) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE AddRecipient( 
            BSTR bstrRecipient,
            /* [defaultvalue][optional][in] */ LONG lType = 0) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE AddSlide( 
            VARIANT __RPC_FAR *pVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE LoadFromFile( 
            BSTR bstrFile) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE GetFirstSlide( 
            /* [retval][out] */ VARIANT __RPC_FAR *pVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE GetNextSlide( 
            /* [retval][out] */ VARIANT __RPC_FAR *pVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE GetFirstRecipient( 
            LONG lType,
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE GetNextRecipient( 
            LONG lType,
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE ClearRecipients( void) = 0;
        
        virtual /* [helpstring][id] */ HRESULT STDMETHODCALLTYPE LoadCustomSMIL( 
            BSTR bstrFile) = 0;
        
    };
    
#else 	/* C style interface */

    typedef struct IMmsMessageVtbl
    {
        BEGIN_INTERFACE
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *QueryInterface )( 
            IMmsMessage __RPC_FAR * This,
            /* [in] */ REFIID riid,
            /* [iid_is][out] */ void __RPC_FAR *__RPC_FAR *ppvObject);
        
        ULONG ( STDMETHODCALLTYPE __RPC_FAR *AddRef )( 
            IMmsMessage __RPC_FAR * This);
        
        ULONG ( STDMETHODCALLTYPE __RPC_FAR *Release )( 
            IMmsMessage __RPC_FAR * This);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetTypeInfoCount )( 
            IMmsMessage __RPC_FAR * This,
            /* [out] */ UINT __RPC_FAR *pctinfo);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetTypeInfo )( 
            IMmsMessage __RPC_FAR * This,
            /* [in] */ UINT iTInfo,
            /* [in] */ LCID lcid,
            /* [out] */ ITypeInfo __RPC_FAR *__RPC_FAR *ppTInfo);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetIDsOfNames )( 
            IMmsMessage __RPC_FAR * This,
            /* [in] */ REFIID riid,
            /* [size_is][in] */ LPOLESTR __RPC_FAR *rgszNames,
            /* [in] */ UINT cNames,
            /* [in] */ LCID lcid,
            /* [size_is][out] */ DISPID __RPC_FAR *rgDispId);
        
        /* [local] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Invoke )( 
            IMmsMessage __RPC_FAR * This,
            /* [in] */ DISPID dispIdMember,
            /* [in] */ REFIID riid,
            /* [in] */ LCID lcid,
            /* [in] */ WORD wFlags,
            /* [out][in] */ DISPPARAMS __RPC_FAR *pDispParams,
            /* [out] */ VARIANT __RPC_FAR *pVarResult,
            /* [out] */ EXCEPINFO __RPC_FAR *pExcepInfo,
            /* [out] */ UINT __RPC_FAR *puArgErr);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_LastError )( 
            IMmsMessage __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Version )( 
            IMmsMessage __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Build )( 
            IMmsMessage __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ExpirationDate )( 
            IMmsMessage __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_Reserved )( 
            IMmsMessage __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_DistributionID )( 
            IMmsMessage __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_DistributionKey )( 
            IMmsMessage __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Clear )( 
            IMmsMessage __RPC_FAR * This);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetErrorDescription )( 
            IMmsMessage __RPC_FAR * This,
            LONG newVal,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Activate )( 
            IMmsMessage __RPC_FAR * This,
            BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_From )( 
            IMmsMessage __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_From )( 
            IMmsMessage __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Class )( 
            IMmsMessage __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_Class )( 
            IMmsMessage __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Priority )( 
            IMmsMessage __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_Priority )( 
            IMmsMessage __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Subject )( 
            IMmsMessage __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_Subject )( 
            IMmsMessage __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_EncodedMessage )( 
            IMmsMessage __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_EncodedMessage )( 
            IMmsMessage __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_RequestReadReceipt )( 
            IMmsMessage __RPC_FAR * This,
            /* [retval][out] */ BOOL __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_RequestReadReceipt )( 
            IMmsMessage __RPC_FAR * This,
            /* [in] */ BOOL newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_RequestDeliveryReport )( 
            IMmsMessage __RPC_FAR * This,
            /* [retval][out] */ BOOL __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_RequestDeliveryReport )( 
            IMmsMessage __RPC_FAR * This,
            /* [in] */ BOOL newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Protocol )( 
            IMmsMessage __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_Protocol )( 
            IMmsMessage __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_TransactionId )( 
            IMmsMessage __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_TransactionId )( 
            IMmsMessage __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_sysBoundary )( 
            IMmsMessage __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_sysSettings )( 
            IMmsMessage __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *SaveToFile )( 
            IMmsMessage __RPC_FAR * This,
            /* [in] */ BSTR bstrFolder,
            /* [in] */ LONG lFormat);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *EncodeMessage )( 
            IMmsMessage __RPC_FAR * This);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *DecodeMessage )( 
            IMmsMessage __RPC_FAR * This);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *AddRecipient )( 
            IMmsMessage __RPC_FAR * This,
            BSTR bstrRecipient,
            /* [defaultvalue][optional][in] */ LONG lType);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *AddSlide )( 
            IMmsMessage __RPC_FAR * This,
            VARIANT __RPC_FAR *pVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *LoadFromFile )( 
            IMmsMessage __RPC_FAR * This,
            BSTR bstrFile);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetFirstSlide )( 
            IMmsMessage __RPC_FAR * This,
            /* [retval][out] */ VARIANT __RPC_FAR *pVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetNextSlide )( 
            IMmsMessage __RPC_FAR * This,
            /* [retval][out] */ VARIANT __RPC_FAR *pVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetFirstRecipient )( 
            IMmsMessage __RPC_FAR * This,
            LONG lType,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetNextRecipient )( 
            IMmsMessage __RPC_FAR * This,
            LONG lType,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *ClearRecipients )( 
            IMmsMessage __RPC_FAR * This);
        
        /* [helpstring][id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *LoadCustomSMIL )( 
            IMmsMessage __RPC_FAR * This,
            BSTR bstrFile);
        
        END_INTERFACE
    } IMmsMessageVtbl;

    interface IMmsMessage
    {
        CONST_VTBL struct IMmsMessageVtbl __RPC_FAR *lpVtbl;
    };

    

#ifdef COBJMACROS


#define IMmsMessage_QueryInterface(This,riid,ppvObject)	\
    (This)->lpVtbl -> QueryInterface(This,riid,ppvObject)

#define IMmsMessage_AddRef(This)	\
    (This)->lpVtbl -> AddRef(This)

#define IMmsMessage_Release(This)	\
    (This)->lpVtbl -> Release(This)


#define IMmsMessage_GetTypeInfoCount(This,pctinfo)	\
    (This)->lpVtbl -> GetTypeInfoCount(This,pctinfo)

#define IMmsMessage_GetTypeInfo(This,iTInfo,lcid,ppTInfo)	\
    (This)->lpVtbl -> GetTypeInfo(This,iTInfo,lcid,ppTInfo)

#define IMmsMessage_GetIDsOfNames(This,riid,rgszNames,cNames,lcid,rgDispId)	\
    (This)->lpVtbl -> GetIDsOfNames(This,riid,rgszNames,cNames,lcid,rgDispId)

#define IMmsMessage_Invoke(This,dispIdMember,riid,lcid,wFlags,pDispParams,pVarResult,pExcepInfo,puArgErr)	\
    (This)->lpVtbl -> Invoke(This,dispIdMember,riid,lcid,wFlags,pDispParams,pVarResult,pExcepInfo,puArgErr)


#define IMmsMessage_get_LastError(This,pVal)	\
    (This)->lpVtbl -> get_LastError(This,pVal)

#define IMmsMessage_get_Version(This,pVal)	\
    (This)->lpVtbl -> get_Version(This,pVal)

#define IMmsMessage_get_Build(This,pVal)	\
    (This)->lpVtbl -> get_Build(This,pVal)

#define IMmsMessage_get_ExpirationDate(This,pVal)	\
    (This)->lpVtbl -> get_ExpirationDate(This,pVal)

#define IMmsMessage_put_Reserved(This,newVal)	\
    (This)->lpVtbl -> put_Reserved(This,newVal)

#define IMmsMessage_put_DistributionID(This,newVal)	\
    (This)->lpVtbl -> put_DistributionID(This,newVal)

#define IMmsMessage_put_DistributionKey(This,newVal)	\
    (This)->lpVtbl -> put_DistributionKey(This,newVal)

#define IMmsMessage_Clear(This)	\
    (This)->lpVtbl -> Clear(This)

#define IMmsMessage_GetErrorDescription(This,newVal,pVal)	\
    (This)->lpVtbl -> GetErrorDescription(This,newVal,pVal)

#define IMmsMessage_Activate(This,newVal)	\
    (This)->lpVtbl -> Activate(This,newVal)

#define IMmsMessage_get_From(This,pVal)	\
    (This)->lpVtbl -> get_From(This,pVal)

#define IMmsMessage_put_From(This,newVal)	\
    (This)->lpVtbl -> put_From(This,newVal)

#define IMmsMessage_get_Class(This,pVal)	\
    (This)->lpVtbl -> get_Class(This,pVal)

#define IMmsMessage_put_Class(This,newVal)	\
    (This)->lpVtbl -> put_Class(This,newVal)

#define IMmsMessage_get_Priority(This,pVal)	\
    (This)->lpVtbl -> get_Priority(This,pVal)

#define IMmsMessage_put_Priority(This,newVal)	\
    (This)->lpVtbl -> put_Priority(This,newVal)

#define IMmsMessage_get_Subject(This,pVal)	\
    (This)->lpVtbl -> get_Subject(This,pVal)

#define IMmsMessage_put_Subject(This,newVal)	\
    (This)->lpVtbl -> put_Subject(This,newVal)

#define IMmsMessage_get_EncodedMessage(This,pVal)	\
    (This)->lpVtbl -> get_EncodedMessage(This,pVal)

#define IMmsMessage_put_EncodedMessage(This,newVal)	\
    (This)->lpVtbl -> put_EncodedMessage(This,newVal)

#define IMmsMessage_get_RequestReadReceipt(This,pVal)	\
    (This)->lpVtbl -> get_RequestReadReceipt(This,pVal)

#define IMmsMessage_put_RequestReadReceipt(This,newVal)	\
    (This)->lpVtbl -> put_RequestReadReceipt(This,newVal)

#define IMmsMessage_get_RequestDeliveryReport(This,pVal)	\
    (This)->lpVtbl -> get_RequestDeliveryReport(This,pVal)

#define IMmsMessage_put_RequestDeliveryReport(This,newVal)	\
    (This)->lpVtbl -> put_RequestDeliveryReport(This,newVal)

#define IMmsMessage_get_Protocol(This,pVal)	\
    (This)->lpVtbl -> get_Protocol(This,pVal)

#define IMmsMessage_put_Protocol(This,newVal)	\
    (This)->lpVtbl -> put_Protocol(This,newVal)

#define IMmsMessage_get_TransactionId(This,pVal)	\
    (This)->lpVtbl -> get_TransactionId(This,pVal)

#define IMmsMessage_put_TransactionId(This,newVal)	\
    (This)->lpVtbl -> put_TransactionId(This,newVal)

#define IMmsMessage_get_sysBoundary(This,pVal)	\
    (This)->lpVtbl -> get_sysBoundary(This,pVal)

#define IMmsMessage_put_sysSettings(This,newVal)	\
    (This)->lpVtbl -> put_sysSettings(This,newVal)

#define IMmsMessage_SaveToFile(This,bstrFolder,lFormat)	\
    (This)->lpVtbl -> SaveToFile(This,bstrFolder,lFormat)

#define IMmsMessage_EncodeMessage(This)	\
    (This)->lpVtbl -> EncodeMessage(This)

#define IMmsMessage_DecodeMessage(This)	\
    (This)->lpVtbl -> DecodeMessage(This)

#define IMmsMessage_AddRecipient(This,bstrRecipient,lType)	\
    (This)->lpVtbl -> AddRecipient(This,bstrRecipient,lType)

#define IMmsMessage_AddSlide(This,pVal)	\
    (This)->lpVtbl -> AddSlide(This,pVal)

#define IMmsMessage_LoadFromFile(This,bstrFile)	\
    (This)->lpVtbl -> LoadFromFile(This,bstrFile)

#define IMmsMessage_GetFirstSlide(This,pVal)	\
    (This)->lpVtbl -> GetFirstSlide(This,pVal)

#define IMmsMessage_GetNextSlide(This,pVal)	\
    (This)->lpVtbl -> GetNextSlide(This,pVal)

#define IMmsMessage_GetFirstRecipient(This,lType,pVal)	\
    (This)->lpVtbl -> GetFirstRecipient(This,lType,pVal)

#define IMmsMessage_GetNextRecipient(This,lType,pVal)	\
    (This)->lpVtbl -> GetNextRecipient(This,lType,pVal)

#define IMmsMessage_ClearRecipients(This)	\
    (This)->lpVtbl -> ClearRecipients(This)

#define IMmsMessage_LoadCustomSMIL(This,bstrFile)	\
    (This)->lpVtbl -> LoadCustomSMIL(This,bstrFile)

#endif /* COBJMACROS */


#endif 	/* C style interface */



/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsMessage_get_LastError_Proxy( 
    IMmsMessage __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsMessage_get_LastError_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsMessage_get_Version_Proxy( 
    IMmsMessage __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsMessage_get_Version_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsMessage_get_Build_Proxy( 
    IMmsMessage __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsMessage_get_Build_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsMessage_get_ExpirationDate_Proxy( 
    IMmsMessage __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsMessage_get_ExpirationDate_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsMessage_put_Reserved_Proxy( 
    IMmsMessage __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB IMmsMessage_put_Reserved_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsMessage_put_DistributionID_Proxy( 
    IMmsMessage __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB IMmsMessage_put_DistributionID_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsMessage_put_DistributionKey_Proxy( 
    IMmsMessage __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB IMmsMessage_put_DistributionKey_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE IMmsMessage_Clear_Proxy( 
    IMmsMessage __RPC_FAR * This);


void __RPC_STUB IMmsMessage_Clear_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE IMmsMessage_GetErrorDescription_Proxy( 
    IMmsMessage __RPC_FAR * This,
    LONG newVal,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsMessage_GetErrorDescription_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE IMmsMessage_Activate_Proxy( 
    IMmsMessage __RPC_FAR * This,
    BSTR newVal);


void __RPC_STUB IMmsMessage_Activate_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsMessage_get_From_Proxy( 
    IMmsMessage __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsMessage_get_From_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsMessage_put_From_Proxy( 
    IMmsMessage __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB IMmsMessage_put_From_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsMessage_get_Class_Proxy( 
    IMmsMessage __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsMessage_get_Class_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsMessage_put_Class_Proxy( 
    IMmsMessage __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB IMmsMessage_put_Class_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsMessage_get_Priority_Proxy( 
    IMmsMessage __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsMessage_get_Priority_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsMessage_put_Priority_Proxy( 
    IMmsMessage __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB IMmsMessage_put_Priority_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsMessage_get_Subject_Proxy( 
    IMmsMessage __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsMessage_get_Subject_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsMessage_put_Subject_Proxy( 
    IMmsMessage __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB IMmsMessage_put_Subject_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsMessage_get_EncodedMessage_Proxy( 
    IMmsMessage __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsMessage_get_EncodedMessage_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsMessage_put_EncodedMessage_Proxy( 
    IMmsMessage __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB IMmsMessage_put_EncodedMessage_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsMessage_get_RequestReadReceipt_Proxy( 
    IMmsMessage __RPC_FAR * This,
    /* [retval][out] */ BOOL __RPC_FAR *pVal);


void __RPC_STUB IMmsMessage_get_RequestReadReceipt_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsMessage_put_RequestReadReceipt_Proxy( 
    IMmsMessage __RPC_FAR * This,
    /* [in] */ BOOL newVal);


void __RPC_STUB IMmsMessage_put_RequestReadReceipt_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsMessage_get_RequestDeliveryReport_Proxy( 
    IMmsMessage __RPC_FAR * This,
    /* [retval][out] */ BOOL __RPC_FAR *pVal);


void __RPC_STUB IMmsMessage_get_RequestDeliveryReport_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsMessage_put_RequestDeliveryReport_Proxy( 
    IMmsMessage __RPC_FAR * This,
    /* [in] */ BOOL newVal);


void __RPC_STUB IMmsMessage_put_RequestDeliveryReport_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsMessage_get_Protocol_Proxy( 
    IMmsMessage __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB IMmsMessage_get_Protocol_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsMessage_put_Protocol_Proxy( 
    IMmsMessage __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB IMmsMessage_put_Protocol_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsMessage_get_TransactionId_Proxy( 
    IMmsMessage __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsMessage_get_TransactionId_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsMessage_put_TransactionId_Proxy( 
    IMmsMessage __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB IMmsMessage_put_TransactionId_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE IMmsMessage_get_sysBoundary_Proxy( 
    IMmsMessage __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsMessage_get_sysBoundary_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE IMmsMessage_put_sysSettings_Proxy( 
    IMmsMessage __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB IMmsMessage_put_sysSettings_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE IMmsMessage_SaveToFile_Proxy( 
    IMmsMessage __RPC_FAR * This,
    /* [in] */ BSTR bstrFolder,
    /* [in] */ LONG lFormat);


void __RPC_STUB IMmsMessage_SaveToFile_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE IMmsMessage_EncodeMessage_Proxy( 
    IMmsMessage __RPC_FAR * This);


void __RPC_STUB IMmsMessage_EncodeMessage_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE IMmsMessage_DecodeMessage_Proxy( 
    IMmsMessage __RPC_FAR * This);


void __RPC_STUB IMmsMessage_DecodeMessage_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE IMmsMessage_AddRecipient_Proxy( 
    IMmsMessage __RPC_FAR * This,
    BSTR bstrRecipient,
    /* [defaultvalue][optional][in] */ LONG lType);


void __RPC_STUB IMmsMessage_AddRecipient_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE IMmsMessage_AddSlide_Proxy( 
    IMmsMessage __RPC_FAR * This,
    VARIANT __RPC_FAR *pVal);


void __RPC_STUB IMmsMessage_AddSlide_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE IMmsMessage_LoadFromFile_Proxy( 
    IMmsMessage __RPC_FAR * This,
    BSTR bstrFile);


void __RPC_STUB IMmsMessage_LoadFromFile_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE IMmsMessage_GetFirstSlide_Proxy( 
    IMmsMessage __RPC_FAR * This,
    /* [retval][out] */ VARIANT __RPC_FAR *pVal);


void __RPC_STUB IMmsMessage_GetFirstSlide_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE IMmsMessage_GetNextSlide_Proxy( 
    IMmsMessage __RPC_FAR * This,
    /* [retval][out] */ VARIANT __RPC_FAR *pVal);


void __RPC_STUB IMmsMessage_GetNextSlide_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE IMmsMessage_GetFirstRecipient_Proxy( 
    IMmsMessage __RPC_FAR * This,
    LONG lType,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsMessage_GetFirstRecipient_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE IMmsMessage_GetNextRecipient_Proxy( 
    IMmsMessage __RPC_FAR * This,
    LONG lType,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB IMmsMessage_GetNextRecipient_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE IMmsMessage_ClearRecipients_Proxy( 
    IMmsMessage __RPC_FAR * This);


void __RPC_STUB IMmsMessage_ClearRecipients_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [helpstring][id] */ HRESULT STDMETHODCALLTYPE IMmsMessage_LoadCustomSMIL_Proxy( 
    IMmsMessage __RPC_FAR * This,
    BSTR bstrFile);


void __RPC_STUB IMmsMessage_LoadCustomSMIL_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);



#endif 	/* __IMmsMessage_INTERFACE_DEFINED__ */


#ifndef __ISmsDataMmsNotification_INTERFACE_DEFINED__
#define __ISmsDataMmsNotification_INTERFACE_DEFINED__

/* interface ISmsDataMmsNotification */
/* [unique][helpstring][dual][uuid][object] */ 


EXTERN_C const IID IID_ISmsDataMmsNotification;

#if defined(__cplusplus) && !defined(CINTERFACE)
    
    MIDL_INTERFACE("4105A254-0E01-4939-A5F7-D49D623B0986")
    ISmsDataMmsNotification : public IDispatch
    {
    public:
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_LastError( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Version( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Build( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ExpirationDate( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_Reserved( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_DistributionID( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_DistributionKey( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE Clear( void) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE GetErrorDescription( 
            LONG newVal,
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE Activate( 
            BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_From( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_From( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Subject( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_Subject( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Class( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_Class( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Expiration( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_Expiration( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ContentLocation( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_ContentLocation( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_MessageSize( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_MessageSize( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_TransactionID( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_TransactionID( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_EncodedMessage( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_EncodedMessage( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE Encode( void) = 0;
        
    };
    
#else 	/* C style interface */

    typedef struct ISmsDataMmsNotificationVtbl
    {
        BEGIN_INTERFACE
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *QueryInterface )( 
            ISmsDataMmsNotification __RPC_FAR * This,
            /* [in] */ REFIID riid,
            /* [iid_is][out] */ void __RPC_FAR *__RPC_FAR *ppvObject);
        
        ULONG ( STDMETHODCALLTYPE __RPC_FAR *AddRef )( 
            ISmsDataMmsNotification __RPC_FAR * This);
        
        ULONG ( STDMETHODCALLTYPE __RPC_FAR *Release )( 
            ISmsDataMmsNotification __RPC_FAR * This);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetTypeInfoCount )( 
            ISmsDataMmsNotification __RPC_FAR * This,
            /* [out] */ UINT __RPC_FAR *pctinfo);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetTypeInfo )( 
            ISmsDataMmsNotification __RPC_FAR * This,
            /* [in] */ UINT iTInfo,
            /* [in] */ LCID lcid,
            /* [out] */ ITypeInfo __RPC_FAR *__RPC_FAR *ppTInfo);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetIDsOfNames )( 
            ISmsDataMmsNotification __RPC_FAR * This,
            /* [in] */ REFIID riid,
            /* [size_is][in] */ LPOLESTR __RPC_FAR *rgszNames,
            /* [in] */ UINT cNames,
            /* [in] */ LCID lcid,
            /* [size_is][out] */ DISPID __RPC_FAR *rgDispId);
        
        /* [local] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Invoke )( 
            ISmsDataMmsNotification __RPC_FAR * This,
            /* [in] */ DISPID dispIdMember,
            /* [in] */ REFIID riid,
            /* [in] */ LCID lcid,
            /* [in] */ WORD wFlags,
            /* [out][in] */ DISPPARAMS __RPC_FAR *pDispParams,
            /* [out] */ VARIANT __RPC_FAR *pVarResult,
            /* [out] */ EXCEPINFO __RPC_FAR *pExcepInfo,
            /* [out] */ UINT __RPC_FAR *puArgErr);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_LastError )( 
            ISmsDataMmsNotification __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Version )( 
            ISmsDataMmsNotification __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Build )( 
            ISmsDataMmsNotification __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ExpirationDate )( 
            ISmsDataMmsNotification __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_Reserved )( 
            ISmsDataMmsNotification __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_DistributionID )( 
            ISmsDataMmsNotification __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_DistributionKey )( 
            ISmsDataMmsNotification __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Clear )( 
            ISmsDataMmsNotification __RPC_FAR * This);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetErrorDescription )( 
            ISmsDataMmsNotification __RPC_FAR * This,
            LONG newVal,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Activate )( 
            ISmsDataMmsNotification __RPC_FAR * This,
            BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_From )( 
            ISmsDataMmsNotification __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_From )( 
            ISmsDataMmsNotification __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Subject )( 
            ISmsDataMmsNotification __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_Subject )( 
            ISmsDataMmsNotification __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Class )( 
            ISmsDataMmsNotification __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_Class )( 
            ISmsDataMmsNotification __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Expiration )( 
            ISmsDataMmsNotification __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_Expiration )( 
            ISmsDataMmsNotification __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ContentLocation )( 
            ISmsDataMmsNotification __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_ContentLocation )( 
            ISmsDataMmsNotification __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_MessageSize )( 
            ISmsDataMmsNotification __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_MessageSize )( 
            ISmsDataMmsNotification __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_TransactionID )( 
            ISmsDataMmsNotification __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_TransactionID )( 
            ISmsDataMmsNotification __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_EncodedMessage )( 
            ISmsDataMmsNotification __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_EncodedMessage )( 
            ISmsDataMmsNotification __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Encode )( 
            ISmsDataMmsNotification __RPC_FAR * This);
        
        END_INTERFACE
    } ISmsDataMmsNotificationVtbl;

    interface ISmsDataMmsNotification
    {
        CONST_VTBL struct ISmsDataMmsNotificationVtbl __RPC_FAR *lpVtbl;
    };

    

#ifdef COBJMACROS


#define ISmsDataMmsNotification_QueryInterface(This,riid,ppvObject)	\
    (This)->lpVtbl -> QueryInterface(This,riid,ppvObject)

#define ISmsDataMmsNotification_AddRef(This)	\
    (This)->lpVtbl -> AddRef(This)

#define ISmsDataMmsNotification_Release(This)	\
    (This)->lpVtbl -> Release(This)


#define ISmsDataMmsNotification_GetTypeInfoCount(This,pctinfo)	\
    (This)->lpVtbl -> GetTypeInfoCount(This,pctinfo)

#define ISmsDataMmsNotification_GetTypeInfo(This,iTInfo,lcid,ppTInfo)	\
    (This)->lpVtbl -> GetTypeInfo(This,iTInfo,lcid,ppTInfo)

#define ISmsDataMmsNotification_GetIDsOfNames(This,riid,rgszNames,cNames,lcid,rgDispId)	\
    (This)->lpVtbl -> GetIDsOfNames(This,riid,rgszNames,cNames,lcid,rgDispId)

#define ISmsDataMmsNotification_Invoke(This,dispIdMember,riid,lcid,wFlags,pDispParams,pVarResult,pExcepInfo,puArgErr)	\
    (This)->lpVtbl -> Invoke(This,dispIdMember,riid,lcid,wFlags,pDispParams,pVarResult,pExcepInfo,puArgErr)


#define ISmsDataMmsNotification_get_LastError(This,pVal)	\
    (This)->lpVtbl -> get_LastError(This,pVal)

#define ISmsDataMmsNotification_get_Version(This,pVal)	\
    (This)->lpVtbl -> get_Version(This,pVal)

#define ISmsDataMmsNotification_get_Build(This,pVal)	\
    (This)->lpVtbl -> get_Build(This,pVal)

#define ISmsDataMmsNotification_get_ExpirationDate(This,pVal)	\
    (This)->lpVtbl -> get_ExpirationDate(This,pVal)

#define ISmsDataMmsNotification_put_Reserved(This,newVal)	\
    (This)->lpVtbl -> put_Reserved(This,newVal)

#define ISmsDataMmsNotification_put_DistributionID(This,newVal)	\
    (This)->lpVtbl -> put_DistributionID(This,newVal)

#define ISmsDataMmsNotification_put_DistributionKey(This,newVal)	\
    (This)->lpVtbl -> put_DistributionKey(This,newVal)

#define ISmsDataMmsNotification_Clear(This)	\
    (This)->lpVtbl -> Clear(This)

#define ISmsDataMmsNotification_GetErrorDescription(This,newVal,pVal)	\
    (This)->lpVtbl -> GetErrorDescription(This,newVal,pVal)

#define ISmsDataMmsNotification_Activate(This,newVal)	\
    (This)->lpVtbl -> Activate(This,newVal)

#define ISmsDataMmsNotification_get_From(This,pVal)	\
    (This)->lpVtbl -> get_From(This,pVal)

#define ISmsDataMmsNotification_put_From(This,newVal)	\
    (This)->lpVtbl -> put_From(This,newVal)

#define ISmsDataMmsNotification_get_Subject(This,pVal)	\
    (This)->lpVtbl -> get_Subject(This,pVal)

#define ISmsDataMmsNotification_put_Subject(This,newVal)	\
    (This)->lpVtbl -> put_Subject(This,newVal)

#define ISmsDataMmsNotification_get_Class(This,pVal)	\
    (This)->lpVtbl -> get_Class(This,pVal)

#define ISmsDataMmsNotification_put_Class(This,newVal)	\
    (This)->lpVtbl -> put_Class(This,newVal)

#define ISmsDataMmsNotification_get_Expiration(This,pVal)	\
    (This)->lpVtbl -> get_Expiration(This,pVal)

#define ISmsDataMmsNotification_put_Expiration(This,newVal)	\
    (This)->lpVtbl -> put_Expiration(This,newVal)

#define ISmsDataMmsNotification_get_ContentLocation(This,pVal)	\
    (This)->lpVtbl -> get_ContentLocation(This,pVal)

#define ISmsDataMmsNotification_put_ContentLocation(This,newVal)	\
    (This)->lpVtbl -> put_ContentLocation(This,newVal)

#define ISmsDataMmsNotification_get_MessageSize(This,pVal)	\
    (This)->lpVtbl -> get_MessageSize(This,pVal)

#define ISmsDataMmsNotification_put_MessageSize(This,newVal)	\
    (This)->lpVtbl -> put_MessageSize(This,newVal)

#define ISmsDataMmsNotification_get_TransactionID(This,pVal)	\
    (This)->lpVtbl -> get_TransactionID(This,pVal)

#define ISmsDataMmsNotification_put_TransactionID(This,newVal)	\
    (This)->lpVtbl -> put_TransactionID(This,newVal)

#define ISmsDataMmsNotification_get_EncodedMessage(This,pVal)	\
    (This)->lpVtbl -> get_EncodedMessage(This,pVal)

#define ISmsDataMmsNotification_put_EncodedMessage(This,newVal)	\
    (This)->lpVtbl -> put_EncodedMessage(This,newVal)

#define ISmsDataMmsNotification_Encode(This)	\
    (This)->lpVtbl -> Encode(This)

#endif /* COBJMACROS */


#endif 	/* C style interface */



/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDataMmsNotification_get_LastError_Proxy( 
    ISmsDataMmsNotification __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsDataMmsNotification_get_LastError_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDataMmsNotification_get_Version_Proxy( 
    ISmsDataMmsNotification __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsDataMmsNotification_get_Version_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDataMmsNotification_get_Build_Proxy( 
    ISmsDataMmsNotification __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsDataMmsNotification_get_Build_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDataMmsNotification_get_ExpirationDate_Proxy( 
    ISmsDataMmsNotification __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsDataMmsNotification_get_ExpirationDate_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsDataMmsNotification_put_Reserved_Proxy( 
    ISmsDataMmsNotification __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB ISmsDataMmsNotification_put_Reserved_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsDataMmsNotification_put_DistributionID_Proxy( 
    ISmsDataMmsNotification __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsDataMmsNotification_put_DistributionID_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsDataMmsNotification_put_DistributionKey_Proxy( 
    ISmsDataMmsNotification __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsDataMmsNotification_put_DistributionKey_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsDataMmsNotification_Clear_Proxy( 
    ISmsDataMmsNotification __RPC_FAR * This);


void __RPC_STUB ISmsDataMmsNotification_Clear_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsDataMmsNotification_GetErrorDescription_Proxy( 
    ISmsDataMmsNotification __RPC_FAR * This,
    LONG newVal,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsDataMmsNotification_GetErrorDescription_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsDataMmsNotification_Activate_Proxy( 
    ISmsDataMmsNotification __RPC_FAR * This,
    BSTR newVal);


void __RPC_STUB ISmsDataMmsNotification_Activate_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDataMmsNotification_get_From_Proxy( 
    ISmsDataMmsNotification __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsDataMmsNotification_get_From_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsDataMmsNotification_put_From_Proxy( 
    ISmsDataMmsNotification __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsDataMmsNotification_put_From_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDataMmsNotification_get_Subject_Proxy( 
    ISmsDataMmsNotification __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsDataMmsNotification_get_Subject_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsDataMmsNotification_put_Subject_Proxy( 
    ISmsDataMmsNotification __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsDataMmsNotification_put_Subject_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDataMmsNotification_get_Class_Proxy( 
    ISmsDataMmsNotification __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsDataMmsNotification_get_Class_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsDataMmsNotification_put_Class_Proxy( 
    ISmsDataMmsNotification __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB ISmsDataMmsNotification_put_Class_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDataMmsNotification_get_Expiration_Proxy( 
    ISmsDataMmsNotification __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsDataMmsNotification_get_Expiration_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsDataMmsNotification_put_Expiration_Proxy( 
    ISmsDataMmsNotification __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB ISmsDataMmsNotification_put_Expiration_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDataMmsNotification_get_ContentLocation_Proxy( 
    ISmsDataMmsNotification __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsDataMmsNotification_get_ContentLocation_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsDataMmsNotification_put_ContentLocation_Proxy( 
    ISmsDataMmsNotification __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsDataMmsNotification_put_ContentLocation_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDataMmsNotification_get_MessageSize_Proxy( 
    ISmsDataMmsNotification __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsDataMmsNotification_get_MessageSize_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsDataMmsNotification_put_MessageSize_Proxy( 
    ISmsDataMmsNotification __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB ISmsDataMmsNotification_put_MessageSize_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDataMmsNotification_get_TransactionID_Proxy( 
    ISmsDataMmsNotification __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsDataMmsNotification_get_TransactionID_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsDataMmsNotification_put_TransactionID_Proxy( 
    ISmsDataMmsNotification __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsDataMmsNotification_put_TransactionID_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDataMmsNotification_get_EncodedMessage_Proxy( 
    ISmsDataMmsNotification __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsDataMmsNotification_get_EncodedMessage_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsDataMmsNotification_put_EncodedMessage_Proxy( 
    ISmsDataMmsNotification __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsDataMmsNotification_put_EncodedMessage_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsDataMmsNotification_Encode_Proxy( 
    ISmsDataMmsNotification __RPC_FAR * This);


void __RPC_STUB ISmsDataMmsNotification_Encode_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);



#endif 	/* __ISmsDataMmsNotification_INTERFACE_DEFINED__ */


#ifndef __ISmsDatavCard_INTERFACE_DEFINED__
#define __ISmsDatavCard_INTERFACE_DEFINED__

/* interface ISmsDatavCard */
/* [unique][helpstring][dual][uuid][object] */ 


EXTERN_C const IID IID_ISmsDatavCard;

#if defined(__cplusplus) && !defined(CINTERFACE)
    
    MIDL_INTERFACE("1F392F11-0F25-4CC9-A3B5-4E05C07258F1")
    ISmsDatavCard : public IDispatch
    {
    public:
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_LastError( 
            /* [retval][out] */ LONG __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Version( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Build( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_ExpirationDate( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_Reserved( 
            /* [in] */ LONG newVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_DistributionID( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_DistributionKey( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE Clear( void) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE GetErrorDescription( 
            LONG lError,
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE Activate( 
            BSTR bstrRegKey) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Name( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_Name( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Phone( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_Phone( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_PhoneWork( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_PhoneWork( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_PhoneHome( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_PhoneHome( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Mobile( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_Mobile( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Pager( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_Pager( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Fax( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_Fax( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Email( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_Email( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Title( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_Title( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_Url( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id][propput] */ HRESULT STDMETHODCALLTYPE put_Url( 
            /* [in] */ BSTR newVal) = 0;
        
        virtual /* [id][propget] */ HRESULT STDMETHODCALLTYPE get_EncodedMessage( 
            /* [retval][out] */ BSTR __RPC_FAR *pVal) = 0;
        
        virtual /* [id] */ HRESULT STDMETHODCALLTYPE Encode( void) = 0;
        
    };
    
#else 	/* C style interface */

    typedef struct ISmsDatavCardVtbl
    {
        BEGIN_INTERFACE
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *QueryInterface )( 
            ISmsDatavCard __RPC_FAR * This,
            /* [in] */ REFIID riid,
            /* [iid_is][out] */ void __RPC_FAR *__RPC_FAR *ppvObject);
        
        ULONG ( STDMETHODCALLTYPE __RPC_FAR *AddRef )( 
            ISmsDatavCard __RPC_FAR * This);
        
        ULONG ( STDMETHODCALLTYPE __RPC_FAR *Release )( 
            ISmsDatavCard __RPC_FAR * This);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetTypeInfoCount )( 
            ISmsDatavCard __RPC_FAR * This,
            /* [out] */ UINT __RPC_FAR *pctinfo);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetTypeInfo )( 
            ISmsDatavCard __RPC_FAR * This,
            /* [in] */ UINT iTInfo,
            /* [in] */ LCID lcid,
            /* [out] */ ITypeInfo __RPC_FAR *__RPC_FAR *ppTInfo);
        
        HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetIDsOfNames )( 
            ISmsDatavCard __RPC_FAR * This,
            /* [in] */ REFIID riid,
            /* [size_is][in] */ LPOLESTR __RPC_FAR *rgszNames,
            /* [in] */ UINT cNames,
            /* [in] */ LCID lcid,
            /* [size_is][out] */ DISPID __RPC_FAR *rgDispId);
        
        /* [local] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Invoke )( 
            ISmsDatavCard __RPC_FAR * This,
            /* [in] */ DISPID dispIdMember,
            /* [in] */ REFIID riid,
            /* [in] */ LCID lcid,
            /* [in] */ WORD wFlags,
            /* [out][in] */ DISPPARAMS __RPC_FAR *pDispParams,
            /* [out] */ VARIANT __RPC_FAR *pVarResult,
            /* [out] */ EXCEPINFO __RPC_FAR *pExcepInfo,
            /* [out] */ UINT __RPC_FAR *puArgErr);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_LastError )( 
            ISmsDatavCard __RPC_FAR * This,
            /* [retval][out] */ LONG __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Version )( 
            ISmsDatavCard __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Build )( 
            ISmsDatavCard __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_ExpirationDate )( 
            ISmsDatavCard __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_Reserved )( 
            ISmsDatavCard __RPC_FAR * This,
            /* [in] */ LONG newVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_DistributionID )( 
            ISmsDatavCard __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_DistributionKey )( 
            ISmsDatavCard __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Clear )( 
            ISmsDatavCard __RPC_FAR * This);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *GetErrorDescription )( 
            ISmsDatavCard __RPC_FAR * This,
            LONG lError,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Activate )( 
            ISmsDatavCard __RPC_FAR * This,
            BSTR bstrRegKey);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Name )( 
            ISmsDatavCard __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_Name )( 
            ISmsDatavCard __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Phone )( 
            ISmsDatavCard __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_Phone )( 
            ISmsDatavCard __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_PhoneWork )( 
            ISmsDatavCard __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_PhoneWork )( 
            ISmsDatavCard __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_PhoneHome )( 
            ISmsDatavCard __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_PhoneHome )( 
            ISmsDatavCard __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Mobile )( 
            ISmsDatavCard __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_Mobile )( 
            ISmsDatavCard __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Pager )( 
            ISmsDatavCard __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_Pager )( 
            ISmsDatavCard __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Fax )( 
            ISmsDatavCard __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_Fax )( 
            ISmsDatavCard __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Email )( 
            ISmsDatavCard __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_Email )( 
            ISmsDatavCard __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Title )( 
            ISmsDatavCard __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_Title )( 
            ISmsDatavCard __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_Url )( 
            ISmsDatavCard __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id][propput] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *put_Url )( 
            ISmsDatavCard __RPC_FAR * This,
            /* [in] */ BSTR newVal);
        
        /* [id][propget] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *get_EncodedMessage )( 
            ISmsDatavCard __RPC_FAR * This,
            /* [retval][out] */ BSTR __RPC_FAR *pVal);
        
        /* [id] */ HRESULT ( STDMETHODCALLTYPE __RPC_FAR *Encode )( 
            ISmsDatavCard __RPC_FAR * This);
        
        END_INTERFACE
    } ISmsDatavCardVtbl;

    interface ISmsDatavCard
    {
        CONST_VTBL struct ISmsDatavCardVtbl __RPC_FAR *lpVtbl;
    };

    

#ifdef COBJMACROS


#define ISmsDatavCard_QueryInterface(This,riid,ppvObject)	\
    (This)->lpVtbl -> QueryInterface(This,riid,ppvObject)

#define ISmsDatavCard_AddRef(This)	\
    (This)->lpVtbl -> AddRef(This)

#define ISmsDatavCard_Release(This)	\
    (This)->lpVtbl -> Release(This)


#define ISmsDatavCard_GetTypeInfoCount(This,pctinfo)	\
    (This)->lpVtbl -> GetTypeInfoCount(This,pctinfo)

#define ISmsDatavCard_GetTypeInfo(This,iTInfo,lcid,ppTInfo)	\
    (This)->lpVtbl -> GetTypeInfo(This,iTInfo,lcid,ppTInfo)

#define ISmsDatavCard_GetIDsOfNames(This,riid,rgszNames,cNames,lcid,rgDispId)	\
    (This)->lpVtbl -> GetIDsOfNames(This,riid,rgszNames,cNames,lcid,rgDispId)

#define ISmsDatavCard_Invoke(This,dispIdMember,riid,lcid,wFlags,pDispParams,pVarResult,pExcepInfo,puArgErr)	\
    (This)->lpVtbl -> Invoke(This,dispIdMember,riid,lcid,wFlags,pDispParams,pVarResult,pExcepInfo,puArgErr)


#define ISmsDatavCard_get_LastError(This,pVal)	\
    (This)->lpVtbl -> get_LastError(This,pVal)

#define ISmsDatavCard_get_Version(This,pVal)	\
    (This)->lpVtbl -> get_Version(This,pVal)

#define ISmsDatavCard_get_Build(This,pVal)	\
    (This)->lpVtbl -> get_Build(This,pVal)

#define ISmsDatavCard_get_ExpirationDate(This,pVal)	\
    (This)->lpVtbl -> get_ExpirationDate(This,pVal)

#define ISmsDatavCard_put_Reserved(This,newVal)	\
    (This)->lpVtbl -> put_Reserved(This,newVal)

#define ISmsDatavCard_put_DistributionID(This,newVal)	\
    (This)->lpVtbl -> put_DistributionID(This,newVal)

#define ISmsDatavCard_put_DistributionKey(This,newVal)	\
    (This)->lpVtbl -> put_DistributionKey(This,newVal)

#define ISmsDatavCard_Clear(This)	\
    (This)->lpVtbl -> Clear(This)

#define ISmsDatavCard_GetErrorDescription(This,lError,pVal)	\
    (This)->lpVtbl -> GetErrorDescription(This,lError,pVal)

#define ISmsDatavCard_Activate(This,bstrRegKey)	\
    (This)->lpVtbl -> Activate(This,bstrRegKey)

#define ISmsDatavCard_get_Name(This,pVal)	\
    (This)->lpVtbl -> get_Name(This,pVal)

#define ISmsDatavCard_put_Name(This,newVal)	\
    (This)->lpVtbl -> put_Name(This,newVal)

#define ISmsDatavCard_get_Phone(This,pVal)	\
    (This)->lpVtbl -> get_Phone(This,pVal)

#define ISmsDatavCard_put_Phone(This,newVal)	\
    (This)->lpVtbl -> put_Phone(This,newVal)

#define ISmsDatavCard_get_PhoneWork(This,pVal)	\
    (This)->lpVtbl -> get_PhoneWork(This,pVal)

#define ISmsDatavCard_put_PhoneWork(This,newVal)	\
    (This)->lpVtbl -> put_PhoneWork(This,newVal)

#define ISmsDatavCard_get_PhoneHome(This,pVal)	\
    (This)->lpVtbl -> get_PhoneHome(This,pVal)

#define ISmsDatavCard_put_PhoneHome(This,newVal)	\
    (This)->lpVtbl -> put_PhoneHome(This,newVal)

#define ISmsDatavCard_get_Mobile(This,pVal)	\
    (This)->lpVtbl -> get_Mobile(This,pVal)

#define ISmsDatavCard_put_Mobile(This,newVal)	\
    (This)->lpVtbl -> put_Mobile(This,newVal)

#define ISmsDatavCard_get_Pager(This,pVal)	\
    (This)->lpVtbl -> get_Pager(This,pVal)

#define ISmsDatavCard_put_Pager(This,newVal)	\
    (This)->lpVtbl -> put_Pager(This,newVal)

#define ISmsDatavCard_get_Fax(This,pVal)	\
    (This)->lpVtbl -> get_Fax(This,pVal)

#define ISmsDatavCard_put_Fax(This,newVal)	\
    (This)->lpVtbl -> put_Fax(This,newVal)

#define ISmsDatavCard_get_Email(This,pVal)	\
    (This)->lpVtbl -> get_Email(This,pVal)

#define ISmsDatavCard_put_Email(This,newVal)	\
    (This)->lpVtbl -> put_Email(This,newVal)

#define ISmsDatavCard_get_Title(This,pVal)	\
    (This)->lpVtbl -> get_Title(This,pVal)

#define ISmsDatavCard_put_Title(This,newVal)	\
    (This)->lpVtbl -> put_Title(This,newVal)

#define ISmsDatavCard_get_Url(This,pVal)	\
    (This)->lpVtbl -> get_Url(This,pVal)

#define ISmsDatavCard_put_Url(This,newVal)	\
    (This)->lpVtbl -> put_Url(This,newVal)

#define ISmsDatavCard_get_EncodedMessage(This,pVal)	\
    (This)->lpVtbl -> get_EncodedMessage(This,pVal)

#define ISmsDatavCard_Encode(This)	\
    (This)->lpVtbl -> Encode(This)

#endif /* COBJMACROS */


#endif 	/* C style interface */



/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDatavCard_get_LastError_Proxy( 
    ISmsDatavCard __RPC_FAR * This,
    /* [retval][out] */ LONG __RPC_FAR *pVal);


void __RPC_STUB ISmsDatavCard_get_LastError_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDatavCard_get_Version_Proxy( 
    ISmsDatavCard __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsDatavCard_get_Version_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDatavCard_get_Build_Proxy( 
    ISmsDatavCard __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsDatavCard_get_Build_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDatavCard_get_ExpirationDate_Proxy( 
    ISmsDatavCard __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsDatavCard_get_ExpirationDate_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsDatavCard_put_Reserved_Proxy( 
    ISmsDatavCard __RPC_FAR * This,
    /* [in] */ LONG newVal);


void __RPC_STUB ISmsDatavCard_put_Reserved_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsDatavCard_put_DistributionID_Proxy( 
    ISmsDatavCard __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsDatavCard_put_DistributionID_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsDatavCard_put_DistributionKey_Proxy( 
    ISmsDatavCard __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsDatavCard_put_DistributionKey_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsDatavCard_Clear_Proxy( 
    ISmsDatavCard __RPC_FAR * This);


void __RPC_STUB ISmsDatavCard_Clear_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsDatavCard_GetErrorDescription_Proxy( 
    ISmsDatavCard __RPC_FAR * This,
    LONG lError,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsDatavCard_GetErrorDescription_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsDatavCard_Activate_Proxy( 
    ISmsDatavCard __RPC_FAR * This,
    BSTR bstrRegKey);


void __RPC_STUB ISmsDatavCard_Activate_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDatavCard_get_Name_Proxy( 
    ISmsDatavCard __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsDatavCard_get_Name_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsDatavCard_put_Name_Proxy( 
    ISmsDatavCard __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsDatavCard_put_Name_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDatavCard_get_Phone_Proxy( 
    ISmsDatavCard __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsDatavCard_get_Phone_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsDatavCard_put_Phone_Proxy( 
    ISmsDatavCard __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsDatavCard_put_Phone_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDatavCard_get_PhoneWork_Proxy( 
    ISmsDatavCard __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsDatavCard_get_PhoneWork_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsDatavCard_put_PhoneWork_Proxy( 
    ISmsDatavCard __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsDatavCard_put_PhoneWork_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDatavCard_get_PhoneHome_Proxy( 
    ISmsDatavCard __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsDatavCard_get_PhoneHome_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsDatavCard_put_PhoneHome_Proxy( 
    ISmsDatavCard __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsDatavCard_put_PhoneHome_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDatavCard_get_Mobile_Proxy( 
    ISmsDatavCard __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsDatavCard_get_Mobile_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsDatavCard_put_Mobile_Proxy( 
    ISmsDatavCard __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsDatavCard_put_Mobile_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDatavCard_get_Pager_Proxy( 
    ISmsDatavCard __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsDatavCard_get_Pager_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsDatavCard_put_Pager_Proxy( 
    ISmsDatavCard __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsDatavCard_put_Pager_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDatavCard_get_Fax_Proxy( 
    ISmsDatavCard __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsDatavCard_get_Fax_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsDatavCard_put_Fax_Proxy( 
    ISmsDatavCard __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsDatavCard_put_Fax_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDatavCard_get_Email_Proxy( 
    ISmsDatavCard __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsDatavCard_get_Email_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsDatavCard_put_Email_Proxy( 
    ISmsDatavCard __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsDatavCard_put_Email_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDatavCard_get_Title_Proxy( 
    ISmsDatavCard __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsDatavCard_get_Title_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsDatavCard_put_Title_Proxy( 
    ISmsDatavCard __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsDatavCard_put_Title_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDatavCard_get_Url_Proxy( 
    ISmsDatavCard __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsDatavCard_get_Url_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propput] */ HRESULT STDMETHODCALLTYPE ISmsDatavCard_put_Url_Proxy( 
    ISmsDatavCard __RPC_FAR * This,
    /* [in] */ BSTR newVal);


void __RPC_STUB ISmsDatavCard_put_Url_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id][propget] */ HRESULT STDMETHODCALLTYPE ISmsDatavCard_get_EncodedMessage_Proxy( 
    ISmsDatavCard __RPC_FAR * This,
    /* [retval][out] */ BSTR __RPC_FAR *pVal);


void __RPC_STUB ISmsDatavCard_get_EncodedMessage_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);


/* [id] */ HRESULT STDMETHODCALLTYPE ISmsDatavCard_Encode_Proxy( 
    ISmsDatavCard __RPC_FAR * This);


void __RPC_STUB ISmsDatavCard_Encode_Stub(
    IRpcStubBuffer *This,
    IRpcChannelBuffer *_pRpcChannelBuffer,
    PRPC_MESSAGE _pRpcMessage,
    DWORD *_pdwStubPhase);



#endif 	/* __ISmsDatavCard_INTERFACE_DEFINED__ */



#ifndef __xssmsmms_LIBRARY_DEFINED__
#define __xssmsmms_LIBRARY_DEFINED__

/* library xssmsmms */
/* [helpstring][version][uuid] */ 


EXTERN_C const IID LIBID_xssmsmms;

EXTERN_C const CLSID CLSID_SmsProtocolGsm;

#ifdef __cplusplus

class DECLSPEC_UUID("30F256C0-EE6E-4C57-A475-E3E81236119F")
SmsProtocolGsm;
#endif

EXTERN_C const CLSID CLSID_SmsMessage;

#ifdef __cplusplus

class DECLSPEC_UUID("6900ABDD-A93C-430F-9939-A0477D4D6F4E")
SmsMessage;
#endif

EXTERN_C const CLSID CLSID_SmsProtocolSmpp;

#ifdef __cplusplus

class DECLSPEC_UUID("0B3C73A0-D209-465A-B6C4-9B6AC9DCC424")
SmsProtocolSmpp;
#endif

EXTERN_C const CLSID CLSID_SmsConstants;

#ifdef __cplusplus

class DECLSPEC_UUID("D59B5767-F7FA-47B7-A1D3-816934964EC4")
SmsConstants;
#endif

EXTERN_C const CLSID CLSID_SmsProtocolHttp;

#ifdef __cplusplus

class DECLSPEC_UUID("0F81C972-915E-41C7-B881-667FD2629300")
SmsProtocolHttp;
#endif

EXTERN_C const CLSID CLSID_SmsProtocolDialup;

#ifdef __cplusplus

class DECLSPEC_UUID("7FE9716E-6120-433C-B7C5-F42F4805B6C2")
SmsProtocolDialup;
#endif

EXTERN_C const CLSID CLSID_PagerProtocolSnpp;

#ifdef __cplusplus

class DECLSPEC_UUID("69AD3E44-38BB-49E2-A03F-2BA71444BDF5")
PagerProtocolSnpp;
#endif

EXTERN_C const CLSID CLSID_SmsDataRingtone;

#ifdef __cplusplus

class DECLSPEC_UUID("2046BDCF-E8C3-454E-8FE4-F7B239E6A1EE")
SmsDataRingtone;
#endif

EXTERN_C const CLSID CLSID_SmsDataPicture;

#ifdef __cplusplus

class DECLSPEC_UUID("7B735208-011D-409F-BC5C-205AE4E93CE0")
SmsDataPicture;
#endif

EXTERN_C const CLSID CLSID_SmsDataWapBookmark;

#ifdef __cplusplus

class DECLSPEC_UUID("ED494BC8-222A-4716-A46D-14F72F02CB89")
SmsDataWapBookmark;
#endif

EXTERN_C const CLSID CLSID_SmsDataWapPush;

#ifdef __cplusplus

class DECLSPEC_UUID("EF74EFF2-4F98-464A-9F73-CF6D77D9C954")
SmsDataWapPush;
#endif

EXTERN_C const CLSID CLSID_SmsDeliveryStatus;

#ifdef __cplusplus

class DECLSPEC_UUID("E3C1E60A-87B3-4178-BB93-CCB8D6AC59F8")
SmsDeliveryStatus;
#endif

EXTERN_C const CLSID CLSID_PagerMessage;

#ifdef __cplusplus

class DECLSPEC_UUID("A4ECB249-089A-458B-B1DC-AFA3F6DFD691")
PagerMessage;
#endif

EXTERN_C const CLSID CLSID_MmsProtocolMm1;

#ifdef __cplusplus

class DECLSPEC_UUID("F0589DF4-1745-4437-B41A-F72B780410AF")
MmsProtocolMm1;
#endif

EXTERN_C const CLSID CLSID_MmsSlide;

#ifdef __cplusplus

class DECLSPEC_UUID("43BFDCA2-0801-4A5F-897F-DA987DD62EF3")
MmsSlide;
#endif

EXTERN_C const CLSID CLSID_MmsConstants;

#ifdef __cplusplus

class DECLSPEC_UUID("51B8A8E6-CC2F-4160-8645-E0B264659493")
MmsConstants;
#endif

EXTERN_C const CLSID CLSID_MmsPermission;

#ifdef __cplusplus

class DECLSPEC_UUID("D3458AB2-3485-4E68-95CB-49EEA9566B35")
MmsPermission;
#endif

EXTERN_C const CLSID CLSID_MmsProtocolMm4;

#ifdef __cplusplus

class DECLSPEC_UUID("BC79F6EF-F0D4-45A6-AB37-44A9ED6B084A")
MmsProtocolMm4;
#endif

EXTERN_C const CLSID CLSID_MmsProtocolMm7;

#ifdef __cplusplus

class DECLSPEC_UUID("368A6DD4-34BD-44F7-BE1D-FD282B3112F1")
MmsProtocolMm7;
#endif

EXTERN_C const CLSID CLSID_MmsMessage;

#ifdef __cplusplus

class DECLSPEC_UUID("968295DF-EE56-433A-99A8-64B47C5FF613")
MmsMessage;
#endif

EXTERN_C const CLSID CLSID_SmsDataMmsNotification;

#ifdef __cplusplus

class DECLSPEC_UUID("4868BE0E-AA1B-4289-8FFB-CC75275D9822")
SmsDataMmsNotification;
#endif

EXTERN_C const CLSID CLSID_SmsDatavCard;

#ifdef __cplusplus

class DECLSPEC_UUID("4368F874-0EBD-4816-8915-F340F7150B95")
SmsDatavCard;
#endif
#endif /* __xssmsmms_LIBRARY_DEFINED__ */

/* Additional Prototypes for ALL interfaces */

unsigned long             __RPC_USER  BSTR_UserSize(     unsigned long __RPC_FAR *, unsigned long            , BSTR __RPC_FAR * ); 
unsigned char __RPC_FAR * __RPC_USER  BSTR_UserMarshal(  unsigned long __RPC_FAR *, unsigned char __RPC_FAR *, BSTR __RPC_FAR * ); 
unsigned char __RPC_FAR * __RPC_USER  BSTR_UserUnmarshal(unsigned long __RPC_FAR *, unsigned char __RPC_FAR *, BSTR __RPC_FAR * ); 
void                      __RPC_USER  BSTR_UserFree(     unsigned long __RPC_FAR *, BSTR __RPC_FAR * ); 

unsigned long             __RPC_USER  VARIANT_UserSize(     unsigned long __RPC_FAR *, unsigned long            , VARIANT __RPC_FAR * ); 
unsigned char __RPC_FAR * __RPC_USER  VARIANT_UserMarshal(  unsigned long __RPC_FAR *, unsigned char __RPC_FAR *, VARIANT __RPC_FAR * ); 
unsigned char __RPC_FAR * __RPC_USER  VARIANT_UserUnmarshal(unsigned long __RPC_FAR *, unsigned char __RPC_FAR *, VARIANT __RPC_FAR * ); 
void                      __RPC_USER  VARIANT_UserFree(     unsigned long __RPC_FAR *, VARIANT __RPC_FAR * ); 

/* end of Additional Prototypes */

#ifdef __cplusplus
}
#endif

#endif
