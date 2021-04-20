<?php
/**
 * @package Core
 * @subpackage model.enum
 */ 
interface ReportType extends BaseEnum
{
   /**
    * same as myReportsMgr::REPORT_TYPE_...
    *
    */
   const TOP_CONTENT = 1;
   const CONTENT_DROPOFF = 2;
   const CONTENT_INTERACTIONS = 3;
   const MAP_OVERLAY = 4;
   const TOP_CONTRIBUTORS = 5;
   const TOP_SYNDICATION = 6;
   const CONTENT_CONTRIBUTIONS = 7;
//	const WIDGETS_STATS = 8;
//	const ADMIN_CONSOLE = 10;		// shouldn't be accessable to users through the API
   const USER_ENGAGEMENT = 11;
   const SPECIFIC_USER_ENGAGEMENT = 12;
   const USER_TOP_CONTENT = 13;
   const USER_CONTENT_DROPOFF = 14;
   const USER_CONTENT_INTERACTIONS = 15;
   const APPLICATIONS = 16;
   const USER_USAGE = 17;
   const SPECIFIC_USER_USAGE = 18;
   const PARTNER_USAGE = 201;
   const VAR_USAGE = 19;
   const TOP_CREATORS = 20;
   const PLATFORMS = 21;
   const OPERATING_SYSTEM = 22;
   const BROWSERS = 23;
   const LIVE = 24;
   const TOP_PLAYBACK_CONTEXT = 25;
   const VPAAS_USAGE = 26;
   const ENTRY_USAGE = 27;
   const REACH_USAGE = 28;
   const TOP_CUSTOM_VAR1 = 29;
   const MAP_OVERLAY_CITY = 30;
   const OPERATING_SYSTEM_FAMILIES = 32;
   const BROWSERS_FAMILIES = 33;
   const USER_ENGAGEMENT_TIMELINE = 34;
   const UNIQUE_USERS_PLAY = 35;
   const MAP_OVERLAY_COUNTRY = 36;
   const MAP_OVERLAY_REGION = 37;
   const TOP_CONTENT_CREATOR = 38;
   const TOP_CONTENT_CONTRIBUTORS = 39;
   const APP_DOMAIN_UNIQUE_ACTIVE_USERS = 40;
   const TOP_SOURCES = 41;
   const VPAAS_USAGE_MULTI = 42;
   const PERCENTILES = 43;
   const CONTENT_REPORT_REASONS = 44;
   const PLAYER_RELATED_INTERACTIONS = 45;
   const PLAYBACK_RATE = 46;
   const TOP_USER_CONTENT = 47;
   const USER_HIGHLIGHTS = 48;
   const USER_INTERACTIVE_VIDEO = 49;
   const INTERACTIVE_VIDEO_TOP_NODES = 50;
   const LATEST_PLAYED_ENTRIES = 51;
   const CATEGORY_HIGHLIGHTS = 52;
   const SUB_CATEGORIES = 53;
   const INTERACTIVE_VIDEO_NODE_TOP_HOTSPOTS = 54;
   const INTERCATIVE_VIDEO_NODE_SWITCH_TOP_HOTSPOTS = 55;
   const INTERACTIVE_VIDEO_HOTSPOT_CLICKED_PERCENTILES = 56;
   const INTERACTIVE_VIDEO_NODE_SWITCH_HOTSPOT_CLICKED_PERCENTILES = 57;
   const TOP_CUSTOM_VAR2 = 58;
   const TOP_CUSTOM_VAR3 = 59;

   //realtime reports
   const MAP_OVERLAY_COUNTRY_REALTIME = 10001;
   const MAP_OVERLAY_REGION_REALTIME = 10002;
   const MAP_OVERLAY_CITY_REALTIME = 10003;
   const PLATFORMS_REALTIME = 10004;
   const USERS_OVERVIEW_REALTIME = 10005;
   const QOS_OVERVIEW_REALTIME = 10006;
   const DISCOVERY_REALTIME = 10007;
   const ENTRY_LEVEL_USERS_DISCOVERY_REALTIME = 10008;
   const ENTRY_LEVEL_USERS_STATUS_REALTIME = 10009;
   const PLATFORMS_DISCOVERY_REALTIME = 10010;
   const PLAYBACK_TYPE_REALTIME = 10011;
   const CONTENT_REALTIME = 10012;
   const DISCOVERY_VIEW_REALTIME = 10013;
   const TOP_ENDED_BROADCAST_ENTRIES = 10014;
   const TOP_LIVE_NOW_ENTRIES = 10015;

   //vpaas
   const CONTENT_DROPOFF_VPAAS = 20001;
   const TOP_SYNDICATION_VPAAS = 20002;
   const USER_TOP_CONTENT_VPAAS = 20003;
   const USER_USAGE_VPAAS = 20004;
   const PLATFORMS_VPAAS = 20005;
   const OPERATING_SYSTEM_VPAAS = 20006;
   const BROWSERS_VPAAS = 20007;
   const OPERATING_SYSTEM_FAMILIES_VPAAS = 20008;
   const BROWSERS_FAMILIES_VPAAS = 20009;
   const USER_ENGAGEMENT_TIMELINE_VPAAS = 20010;
   const UNIQUE_USERS_PLAY_VPAAS = 20011;
   const MAP_OVERLAY_COUNTRY_VPAAS = 20012;
   const MAP_OVERLAY_REGION_VPAAS = 20013;
   const MAP_OVERLAY_CITY_VPAAS = 20014;
   const TOP_CONTENT_CREATOR_VPAAS = 20015;
   const TOP_CONTENT_CONTRIBUTORS_VPAAS = 20016;
   const TOP_SOURCES_VPAAS = 20017;
   const CONTENT_REPORT_REASONS_VPAAS = 20018;
   const PLAYER_RELATED_INTERACTIONS_VPAAS = 20019;
   const PLAYBACK_RATE_VPAAS = 20020;
   const PARTNER_USAGE_VPAAS = 20021;
   const TOP_PLAYBACK_CONTEXT_VPAAS = 20022;

   //qoe reports
   const QOE_OVERVIEW = 30001;
   const QOE_EXPERIENCE = 30002;
   const QOE_EXPERIENCE_PLATFORMS = 30003;
   const QOE_EXPERIENCE_COUNTRY = 30004;
   const QOE_EXPERIENCE_REGION = 30005;
   const QOE_EXPERIENCE_CITY = 30006;
   const QOE_EXPERIENCE_BROWSERS_FAMILIES = 30007;
   const QOE_EXPERIENCE_BROWSERS = 30008;
   const QOE_EXPERIENCE_OPERATING_SYSTEM_FAMILIES = 30009;
   const QOE_EXPERIENCE_OPERATING_SYSTEM = 30010;
   const QOE_EXPERIENCE_PLAYER_VERSION = 30011;
   const QOE_EXPERIENCE_ENTRY = 30012;
   const QOE_EXPERIENCE_ISP = 30013;
   const QOE_ENGAGEMENT = 30014;
   const QOE_ENGAGEMENT_PLATFORMS = 30015;
   const QOE_ENGAGEMENT_COUNTRY = 30016;
   const QOE_ENGAGEMENT_REGION = 30017;
   const QOE_ENGAGEMENT_CITY = 30018;
   const QOE_ENGAGEMENT_BROWSERS_FAMILIES = 30019;
   const QOE_ENGAGEMENT_BROWSERS = 30020;
   const QOE_ENGAGEMENT_OPERATING_SYSTEM_FAMILIES = 30021;
   const QOE_ENGAGEMENT_OPERATING_SYSTEM = 30022;
   const QOE_ENGAGEMENT_PLAYER_VERSION = 30023;
   const QOE_ENGAGEMENT_ENTRY = 30024;
   const QOE_ENGAGEMENT_ISP = 30025;
   const QOE_STREAM_QUALITY = 30026;
   const QOE_STREAM_QUALITY_PLATFORMS = 30027;
   const QOE_STREAM_QUALITY_COUNTRY = 30028;
   const QOE_STREAM_QUALITY_REGION = 30029;
   const QOE_STREAM_QUALITY_CITY = 30030;
   const QOE_STREAM_QUALITY_BROWSERS_FAMILIES = 30031;
   const QOE_STREAM_QUALITY_BROWSERS = 30032;
   const QOE_STREAM_QUALITY_OPERATING_SYSTEM_FAMILIES = 30033;
   const QOE_STREAM_QUALITY_OPERATING_SYSTEM = 30034;
   const QOE_STREAM_QUALITY_PLAYER_VERSION = 30035;
   const QOE_STREAM_QUALITY_ENTRY = 30036;
   const QOE_STREAM_QUALITY_ISP = 30037;
   const QOE_ERROR_TRACKING = 30038;
   const QOE_ERROR_TRACKING_CODES = 30039;
   const QOE_ERROR_TRACKING_PLATFORMS = 30040;
   const QOE_ERROR_TRACKING_BROWSERS_FAMILIES = 30041;
   const QOE_ERROR_TRACKING_BROWSERS = 30042;
   const QOE_ERROR_TRACKING_OPERATING_SYSTEM_FAMILIES = 30043;
   const QOE_ERROR_TRACKING_OPERATING_SYSTEM = 30044;
   const QOE_ERROR_TRACKING_PLAYER_VERSION = 30045;
   const QOE_ERROR_TRACKING_ENTRY = 30046;
   const QOE_VOD_SESSION_FLOW = 30047;
   const QOE_LIVE_SESSION_FLOW = 30048;
   const QOE_EXPERIENCE_CUSTOM_VAR1 = 30049;
   const QOE_EXPERIENCE_CUSTOM_VAR2 = 30050;
   const QOE_EXPERIENCE_CUSTOM_VAR3 = 30051;
   const QOE_ENGAGEMENT_CUSTOM_VAR1 = 30052;
   const QOE_ENGAGEMENT_CUSTOM_VAR2 = 30053;
   const QOE_ENGAGEMENT_CUSTOM_VAR3 = 30054;
   const QOE_STREAM_QUALITY_CUSTOM_VAR1 = 30055;
   const QOE_STREAM_QUALITY_CUSTOM_VAR2 = 30056;
   const QOE_STREAM_QUALITY_CUSTOM_VAR3 = 30057;
   const QOE_ERROR_TRACKING_CUSTOM_VAR1 = 30058;
   const QOE_ERROR_TRACKING_CUSTOM_VAR2 = 30059;
   const QOE_ERROR_TRACKING_CUSTOM_VAR3 = 30060;
   const QOE_EXPERIENCE_APPLICATION_VERSION = 30061;
   const QOE_ENGAGEMENT_APPLICATION_VERSION = 30062;
   const QOE_STREAM_QUALITY_APPLICATION_VERSION = 30063;
   const QOE_ERROR_TRACKING_APPLICATION_VERSION = 30064;

	//webcast
   const HIGHLIGHTS_WEBCAST = 40001;
   const ENGAGEMENT_WEBCAST = 40002;
   const QUALITY_WEBCAST = 40003;
   const MAP_OVERLAY_COUNTRY_WEBCAST = 40004;
   const MAP_OVERLAY_REGION_WEBCAST = 40005;
   const MAP_OVERLAY_CITY_WEBCAST = 40006;
   const PLATFORMS_WEBCAST = 40007;
   const TOP_DOMAINS_WEBCAST = 40008;
   const TOP_USERS_WEBCAST = 40009;
   const ENGAGEMENT_BREAKDOWN_WEBCAST = 40010;
   const ENGAGMENT_TIMELINE_WEBCAST = 40011;
   const ENGAGEMENT_TOOLS_WEBCAST = 40012;
   const REACTIONS_BREAKDOWN_WEBCAST = 40013;

}
