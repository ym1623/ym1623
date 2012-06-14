#ifndef _smmsConstants_H_
#define _smmsConstants_H_
						 
// Type of message

#define asMESSAGEFORMAT_TEXT						0	// Standard Text message ( GSM )
#define asMESSAGEFORMAT_TEXT_FLASH					1	// Standard Text message, immediate display
#define asMESSAGEFORMAT_TEXT_MULTIPART				2	// Standard Text message, multipart 
#define asMESSAGEFORMAT_TEXT_MULTIPART_FLASH		3	// Standard Text message, multipart and immediate display 

#define asMESSAGEFORMAT_DATA						10	// Data message ( Raw 8 bit data )
#define asMESSAGEFORMAT_DATA_UDH					11	// Data message with User Data Header ( ringtones )

#define asMESSAGEFORMAT_UNICODE						20  // Unicode Message ( UCS2 )
#define asMESSAGEFORMAT_UNICODE_FLASH				21  // Unicode Message, immediate display
#define asMESSAGEFORMAT_UNICODE_MULTIPART			22	// Unicode Message, Multipart
#define asMESSAGEFORMAT_UNICODE_MULTIPART_FLASH		23	// Unicode Message, Multipart and immediate display

#define asMESSAGEFORMAT_REPORT						30	// Status report message

#define asMESSAGEFORMAT_NOTIFICATION_VOICEMAIL		71	// Send voicemail indication
#define asMESSAGEFORMAT_NOTIFICATION_FAX			72	// Send FAX indication
#define asMESSAGEFORMAT_NOTIFICATION_EMAIL			73	// Send e-mail indication
#define asMESSAGEFORMAT_NOTIFICATION_MMS			74	// Received MMS notification

// Message storage to use when receiving messages

#define asSTORAGE_ALL								0	// Scan all memories				( SM + ME + SR )
#define asSTORAGE_SIM								1	// Use SIM Memory					( SM )
#define asSTORAGE_DEVICE							2	// Use Device Memory				( ME )
#define asSTORAGE_COMBINED							3	// Use Any Memory					( MT )
#define asSTORAGE_REPORTS							4	// Use Report Memory				( SR )

// The type of provider to use in ISmsProtocolDialUp

#define asPROVIDERTYPE_UCP							0	// UCP Provider
#define asPROVIDERTYPE_TAP_DEFAULT					1	// Standard TAP provider
#define asPROVIDERTYPE_TAP_NOLF						2	// TAP provider, no request for LineFeed
#define asPROVIDERTYPE_TAP_NOEOT					3	// TAP provider, no request for EOT

// Dialmode used in ISmsProtocolDialUp

#define asDIALMODE_TONE								0	// Use tone dialing ( DTMF )
#define asDIALMODE_PULSE							1	// Use pulse dialing

// DataFormat

#define asDEVICESETTINGS_DEFAULT					0	// default
#define asDEVICESETTINGS_8N1						1	// n,8,1
#define asDEVICESETTINGS_7E1						2	// e,7,1

// FlowControl

#define asDEVICEFLOWCONTROL_DEFAULT					0	// default
#define asDEVICEFLOWCONTROL_ENABLE					1	// enabled
#define asDEVICEFLOWCONTROL_DISABLE					2	// disabled

// SMPP bind mode	

#define	asSMPPMODE_TRANSCEIVER						0	// Connect as transceiver
#define asSMPPMODE_TRANSMITTER						1	// Connect as transmitter
#define asSMPPMODE_RECEIVER							2	// Connect as receiver

// SMPP version

#define asSMPPVERSION_33							33	// Smpp version 3.3
#define asSMPPVERSION_34						    34	// Smpp version 3.4
#define asSMPPVERSION_50							50	// Smpp version 5.0

// SMPP SMSC characterset

#define asSMPPCHARSET_DEFAULT						0	// Use SMSC default charset
#define asSMPPCHARSET_GSM							1	// GSM Encoding (IA5)
#define asSMPPCHARSET_ASCII							2	// ASCII
#define asSMPPCHARSET_LATIN							3	// ISO 8859-1 charset
#define asSMPPCHARSET_JIS							4	// JIS
#define asSMPPCHARSET_CYRILLIC						5	// Cyrillic
#define asSMPPCHARSET_HEBREW						6	// Hebrew
#define asSMPPCHARSET_JAPANESE						7	// Japanese
#define asSMPPCHARSET_GREEK							8	// Greek

// TLV types

#define asSMPP_TLV_1BYTE							1	// 1 Byte TLV Value
#define asSMPP_TLV_2BYTE							2	// 2 Byte TLV Value
#define asSMPP_TLV_4BYTE							3	// 4 Byte TLV Value
#define asSMPP_TLV_COCTET							4	// Zero terminated string TLV Value
#define asSMPP_TLV_OCTET							5	// Data TLV Value
#define	asSMPP_TLV_VARIABLE							6	// Variable TLV 

// Delivery Report Status codes

#define asDELIVERYSTATUS_SCHEDULED					0	// Scheduled
#define asDELIVERYSTATUS_ENROUTE					1	// Enroute
#define asDELIVERYSTATUS_DELIVERED					2	// Delivered
#define asDELIVERYSTATUS_EXPIRED					3	// Expired
#define asDELIVERYSTATUS_DELETED					4	// Deleted
#define asDELIVERYSTATUS_UNDELIVERABLE				5	// Undeliverable
#define asDELIVERYSTATUS_ACCEPTED					6	// Accepted
#define asDELIVERYSTATUS_UNKNOWN					7	// Unknown
#define asDELIVERYSTATUS_REJECTED					8	// Rejected
#define asDELIVERYSTATUS_SKIPPED					9	// Skipped
#define asDELIVERYSTATUS_SUBMITTED					10	// Submitted


// WAP Push Connection Type

#define asWAPPUSH_SERVICE_INDICATION				0	// Service Indication
#define asWAPPUSH_SERVICE_LOAD						1	// Service Load

// WAP Push Service Indication signal actions

#define asWAPPUSHSIGNAL_NONE						0	// Signal Action "None"
#define asWAPPUSHSIGNAL_LOW							1	// Signal Action "Low"
#define asWAPPUSHSIGNAL_MEDIUM						2	// Signal Action "Medium"
#define asWAPPUSHSIGNAL_HIGH						3	// Signal Action "High"
#define asWAPPUSHSIGNAL_DELETE						4	// Signal Action "Delete"

// WAP Push Service Load actions

#define asWAPPUSH_ACTION_EXECUTE_LOW				0	// Execute Low
#define asWAPPUSH_ACTION_EXECUTE_HIGH				1	// Execute High
#define asWAPPUSH_ACTION_CACHE						2	// Cache

// Picture Message Type

#define asPICTURE_MESSAGE							0	// Bitmap
#define asPICTURE_CALLERGROUP						1	// Caller Line Identification Icon
#define asPICTURE_OPERATORLOGO						2	// Operator Logo
#define asPICTURE_OPERATORLOGO_RESTORE				3	// Remove Operator Logo

// MMS Recipients

#define asMMS_RECIPIENT_TO							0	// To:
#define asMMS_RECIPIENT_CC							1	// Cc:
#define asMMS_RECIPIENT_BCC							2	// Bcc:

// MMS Classes

#define asMMS_CLASS_PERSONAL						0	// Personal
#define asMMS_CLASS_ADVERTISEMENT					1	// Advertisement
#define asMMS_CLASS_INFORMATIONAL					2	// Informational
#define asMMS_CLASS_AUTO							3	// Auto

// MMS Priority

#define asMMS_PRIORITY_LOW							0	// Low Priority
#define asMMS_PRIORITY_NORMAL						1	// Normal Priority
#define asMMS_PRIORITY_HIGH							2	// High Priority

// MMS Protocols

#define asMMS_PROTOCOL_MM1							1	// MM1 Interface
#define asMMS_PROTOCOL_MM4							4	// MM4 Interface
#define asMMS_PROTOCOL_MM7							7	// MM7 Interface

// DRM permissions

#define asMMS_DRM_FORWARDLOCK						0	// Forward lock only
#define asMMS_DRM_PLAY								1	// Play Content ( audio/video )
#define asMMS_DRM_DISPLAY							2	// Display Content ( images )
#define asMMS_DRM_EXECUTE							3	// Execute Content ( applications )
#define asMMS_DRM_PRINT								4	// Print Content

// MM1 File Formats

#define asMMS_MM1FILE_MSENDREQ						1	// MM1 M-Send.req
#define asMMS_MM1FILE_MRETRIEVECONF					2	// MM1 M-Retrieve.conf

// MM7 MMS Versions (3GPP)

#define asMMS_VERSION_5_2_0							0	// MMS 3GPP Version 5.2.0
#define asMMS_VERSION_5_3_0							1	// MMS 3GPP Version 5.3.0
#define asMMS_VERSION_5_4_0							2	// MMS 3GPP Version 5.4.0
#define asMMS_VERSION_5_5_0							3	// MMS 3GPP Version 5.5.0
#define asMMS_VERSION_5_6_0							4	// MMS 3GPP Version 5.6.0
#define asMMS_VERSION_5_7_0							5	// MMS 3GPP Version 5.7.0
#define asMMS_VERSION_5_8_0							6	// MMS 3GPP Version 5.8.0
#define asMMS_VERSION_5_9_0							7	// MMS 3GPP Version 5.9.0
#define asMMS_VERSION_5_10_0						8	// MMS 3GPP Version 5.10.0
#define asMMS_VERSION_5_11_0						9	// MMS 3GPP Version 5.11.0
#define asMMS_VERSION_6_0_0							10	// MMS 3GPP Version 6.0.0
#define asMMS_VERSION_6_1_0							11	// MMS 3GPP Version 6.1.0
#define asMMS_VERSION_6_2_0							12	// MMS 3GPP Version 6.2.0
#define asMMS_VERSION_6_3_0							13	// MMS 3GPP Version 6.3.0
#define asMMS_VERSION_6_4_0							14	// MMS 3GPP Version 6.4.0
#define asMMS_VERSION_6_5_0							15	// MMS 3GPP Version 6.5.0
#define asMMS_VERSION_6_6_0							16	// MMS 3GPP Version 6.6.0
#define asMMS_VERSION_6_7_0							17	// MMS 3GPP Version 6.7.0

// MM7 XML SCHEMAS (3GPP)

#define asMMS_SCHEMA_REL5_MM7_1_0					0	// MM7 XML SCHEMA REL-5-MM7-1-0
#define asMMS_SCHEMA_REL5_MM7_1_1					1	// MM7 XML SCHEMA REL-5-MM7-1-1
#define asMMS_SCHEMA_REL5_MM7_1_2					2	// MM7 XML SCHEMA REL-5-MM7-1-2
#define asMMS_SCHEMA_REL5_MM7_1_3					3	// MM7 XML SCHEMA REL-5-MM7-1-3
#define asMMS_SCHEMA_REL5_MM7_1_4					4	// MM7 XML SCHEMA REL-5-MM7-1-4
#define asMMS_SCHEMA_REL5_MM7_1_5					5	// MM7 XML SCHEMA REL-5-MM7-1-5

#define asMMS_SCHEMA_REL6_MM7_1_0					6	// MM7 XML SCHEMA REL-6-MM7-1-0
#define asMMS_SCHEMA_REL6_MM7_1_1					7	// MM7 XML SCHEMA REL-6-MM7-1-1
#define asMMS_SCHEMA_REL6_MM7_1_2					8	// MM7 XML SCHEMA REL-6-MM7-1-2
#define asMMS_SCHEMA_REL6_MM7_1_3					9	// MM7 XML SCHEMA REL-6-MM7-1-3


// MM7 Variations

#define asMMS_MM7VARIATION_3GPP						0	// 3GPPS TS 23.140 MM7 specification
#define asMMS_MM7VARIATION_ERICSSON					1	// Ericsson MM7 specification
#define asMMS_MM7VARIATION_PAP						2	// Push access protocol over HTTP

#endif	// _smmsConstants_H_