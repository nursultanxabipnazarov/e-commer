<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v16/services/campaign_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V16\Services;

class CampaignService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\LaunchStage::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
?google/ads/googleads/v16/common/real_time_bidding_setting.protogoogle.ads.googleads.v16.common"8
RealTimeBiddingSetting
opt_in (H �B	
_opt_inB�
#com.google.ads.googleads.v16.commonBRealTimeBiddingSettingProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v16/common;common�GAA�Google.Ads.GoogleAds.V16.Common�Google\\Ads\\GoogleAds\\V16\\Common�#Google::Ads::GoogleAds::V16::Commonbproto3
�
9google/ads/googleads/v16/enums/location_source_type.protogoogle.ads.googleads.v16.enums"s
LocationSourceTypeEnum"Y
LocationSourceType
UNSPECIFIED 
UNKNOWN
GOOGLE_MY_BUSINESS
	AFFILIATEB�
"com.google.ads.googleads.v16.enumsBLocationSourceTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
3google/ads/googleads/v16/enums/asset_set_type.protogoogle.ads.googleads.v16.enums"�
AssetSetTypeEnum"�
AssetSetType
UNSPECIFIED 
UNKNOWN
	PAGE_FEED
DYNAMIC_EDUCATION
MERCHANT_CENTER_FEED
DYNAMIC_REAL_ESTATE
DYNAMIC_CUSTOM
DYNAMIC_HOTELS_AND_RENTALS
DYNAMIC_FLIGHTS
DYNAMIC_TRAVEL	
DYNAMIC_LOCAL

DYNAMIC_JOBS
LOCATION_SYNC+
\'BUSINESS_PROFILE_DYNAMIC_LOCATION_GROUP 
CHAIN_DYNAMIC_LOCATION_GROUP
STATIC_LOCATION_GROUP
HOTEL_PROPERTYB�
"com.google.ads.googleads.v16.enumsBAssetSetTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
6google/ads/googleads/v16/common/custom_parameter.protogoogle.ads.googleads.v16.common"I
CustomParameter
key (	H �
value (	H�B
_keyB
_valueB�
#com.google.ads.googleads.v16.commonBCustomParameterProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v16/common;common�GAA�Google.Ads.GoogleAds.V16.Common�Google\\Ads\\GoogleAds\\V16\\Common�#Google::Ads::GoogleAds::V16::Commonbproto3
�
Cgoogle/ads/googleads/v16/enums/campaign_primary_status_reason.protogoogle.ads.googleads.v16.enums"�
CampaignPrimaryStatusReasonEnum"�
CampaignPrimaryStatusReason
UNSPECIFIED 
UNKNOWN
CAMPAIGN_REMOVED
CAMPAIGN_PAUSED
CAMPAIGN_PENDING
CAMPAIGN_ENDED
CAMPAIGN_DRAFT"
BIDDING_STRATEGY_MISCONFIGURED
BIDDING_STRATEGY_LIMITED
BIDDING_STRATEGY_LEARNING	 
BIDDING_STRATEGY_CONSTRAINED

BUDGET_CONSTRAINED
BUDGET_MISCONFIGURED
SEARCH_VOLUME_LIMITED
AD_GROUPS_PAUSED
NO_AD_GROUPS
KEYWORDS_PAUSED
NO_KEYWORDS
AD_GROUP_ADS_PAUSED
NO_AD_GROUP_ADS
HAS_ADS_LIMITED_BY_POLICY
HAS_ADS_DISAPPROVED
MOST_ADS_UNDER_REVIEW
MISSING_LEAD_FORM_EXTENSION
MISSING_CALL_EXTENSION$
 LEAD_FORM_EXTENSION_UNDER_REVIEW#
LEAD_FORM_EXTENSION_DISAPPROVED
CALL_EXTENSION_UNDER_REVIEW
CALL_EXTENSION_DISAPPROVED+
\'NO_MOBILE_APPLICATION_AD_GROUP_CRITERIA
CAMPAIGN_GROUP_PAUSED*
&CAMPAIGN_GROUP_ALL_GROUP_BUDGETS_ENDED
APP_NOT_RELEASED 
APP_PARTIALLY_RELEASED! 
HAS_ASSET_GROUPS_DISAPPROVED"&
"HAS_ASSET_GROUPS_LIMITED_BY_POLICY#"
MOST_ASSET_GROUPS_UNDER_REVIEW$
NO_ASSET_GROUPS%
ASSET_GROUPS_PAUSED&B�
"com.google.ads.googleads.v16.enumsB CampaignPrimaryStatusReasonProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
5google/ads/googleads/v16/enums/asset_field_type.protogoogle.ads.googleads.v16.enums"�
AssetFieldTypeEnum"�
AssetFieldType
UNSPECIFIED 
UNKNOWN
HEADLINE
DESCRIPTION
MANDATORY_AD_TEXT
MARKETING_IMAGE
MEDIA_BUNDLE
YOUTUBE_VIDEO
BOOK_ON_GOOGLE
	LEAD_FORM	
	PROMOTION

CALLOUT
STRUCTURED_SNIPPET
SITELINK

MOBILE_APP
HOTEL_CALLOUT
CALL	
PRICE
LONG_HEADLINE
BUSINESS_NAME
SQUARE_MARKETING_IMAGE
PORTRAIT_MARKETING_IMAGE
LOGO
LANDSCAPE_LOGO	
VIDEO
CALL_TO_ACTION_SELECTION
AD_IMAGE
BUSINESS_LOGO
HOTEL_PROPERTYB�
"com.google.ads.googleads.v16.enumsBAssetFieldTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
;google/ads/googleads/v16/enums/optimization_goal_type.protogoogle.ads.googleads.v16.enums"�
OptimizationGoalTypeEnum"w
OptimizationGoalType
UNSPECIFIED 
UNKNOWN
CALL_CLICKS
DRIVING_DIRECTIONS
APP_PRE_REGISTRATIONB�
"com.google.ads.googleads.v16.enumsBOptimizationGoalTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
=google/ads/googleads/v16/enums/negative_geo_target_type.protogoogle.ads.googleads.v16.enums"z
NegativeGeoTargetTypeEnum"]
NegativeGeoTargetType
UNSPECIFIED 
UNKNOWN
PRESENCE_OR_INTEREST
PRESENCEB�
"com.google.ads.googleads.v16.enumsBNegativeGeoTargetTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
Cgoogle/ads/googleads/v16/enums/bidding_strategy_system_status.protogoogle.ads.googleads.v16.enums"�
BiddingStrategySystemStatusEnum"�
BiddingStrategySystemStatus
UNSPECIFIED 
UNKNOWN
ENABLED
LEARNING_NEW
LEARNING_SETTING_CHANGE
LEARNING_BUDGET_CHANGE
LEARNING_COMPOSITION_CHANGE#
LEARNING_CONVERSION_TYPE_CHANGE&
"LEARNING_CONVERSION_SETTING_CHANGE
LIMITED_BY_CPC_BID_CEILING	
LIMITED_BY_CPC_BID_FLOOR

LIMITED_BY_DATA
LIMITED_BY_BUDGET!
LIMITED_BY_LOW_PRIORITY_SPEND
LIMITED_BY_LOW_QUALITY
LIMITED_BY_INVENTORY"
MISCONFIGURED_ZERO_ELIGIBILITY"
MISCONFIGURED_CONVERSION_TYPES%
!MISCONFIGURED_CONVERSION_SETTINGS
MISCONFIGURED_SHARED_BUDGET
MISCONFIGURED_STRATEGY_TYPE

PAUSED
UNAVAILABLE
MULTIPLE_LEARNING
MULTIPLE_LIMITED
MULTIPLE_MISCONFIGURED
MULTIPLEB�
"com.google.ads.googleads.v16.enumsB BiddingStrategySystemStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
Cgoogle/ads/googleads/v16/enums/vanity_pharma_display_url_mode.protogoogle.ads.googleads.v16.enums"�
VanityPharmaDisplayUrlModeEnum"q
VanityPharmaDisplayUrlMode
UNSPECIFIED 
UNKNOWN
MANUFACTURER_WEBSITE_URL
WEBSITE_DESCRIPTIONB�
"com.google.ads.googleads.v16.enumsBVanityPharmaDisplayUrlModeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
=google/ads/googleads/v16/enums/campaign_experiment_type.protogoogle.ads.googleads.v16.enums"y
CampaignExperimentTypeEnum"[
CampaignExperimentType
UNSPECIFIED 
UNKNOWN
BASE	
DRAFT

EXPERIMENTB�
"com.google.ads.googleads.v16.enumsBCampaignExperimentTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
7google/ads/googleads/v16/enums/vanity_pharma_text.protogoogle.ads.googleads.v16.enums"�
VanityPharmaTextEnum"�
VanityPharmaText
UNSPECIFIED 
UNKNOWN%
!PRESCRIPTION_TREATMENT_WEBSITE_EN%
!PRESCRIPTION_TREATMENT_WEBSITE_ES"
PRESCRIPTION_DEVICE_WEBSITE_EN"
PRESCRIPTION_DEVICE_WEBSITE_ES
MEDICAL_DEVICE_WEBSITE_EN
MEDICAL_DEVICE_WEBSITE_ES%
!PREVENTATIVE_TREATMENT_WEBSITE_EN%
!PREVENTATIVE_TREATMENT_WEBSITE_ES	)
%PRESCRIPTION_CONTRACEPTION_WEBSITE_EN
)
%PRESCRIPTION_CONTRACEPTION_WEBSITE_ES#
PRESCRIPTION_VACCINE_WEBSITE_EN#
PRESCRIPTION_VACCINE_WEBSITE_ESB�
"com.google.ads.googleads.v16.enumsBVanityPharmaTextProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
=google/ads/googleads/v16/enums/frequency_cap_event_type.protogoogle.ads.googleads.v16.enums"r
FrequencyCapEventTypeEnum"U
FrequencyCapEventType
UNSPECIFIED 
UNKNOWN

IMPRESSION

VIDEO_VIEWB�
"com.google.ads.googleads.v16.enumsBFrequencyCapEventTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
;google/ads/googleads/v16/enums/app_campaign_app_store.protogoogle.ads.googleads.v16.enums"y
AppCampaignAppStoreEnum"^
AppCampaignAppStore
UNSPECIFIED 
UNKNOWN
APPLE_APP_STORE
GOOGLE_APP_STOREB�
"com.google.ads.googleads.v16.enumsBAppCampaignAppStoreProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
=google/ads/googleads/v16/enums/positive_geo_target_type.protogoogle.ads.googleads.v16.enums"�
PositiveGeoTargetTypeEnum"r
PositiveGeoTargetType
UNSPECIFIED 
UNKNOWN
PRESENCE_OR_INTEREST
SEARCH_INTEREST
PRESENCEB�
"com.google.ads.googleads.v16.enumsBPositiveGeoTargetTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
<google/ads/googleads/v16/enums/frequency_cap_time_unit.protogoogle.ads.googleads.v16.enums"n
FrequencyCapTimeUnitEnum"R
FrequencyCapTimeUnit
UNSPECIFIED 
UNKNOWN
DAY
WEEK	
MONTHB�
"com.google.ads.googleads.v16.enumsBFrequencyCapTimeUnitProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
?google/ads/googleads/v16/enums/target_frequency_time_unit.protogoogle.ads.googleads.v16.enums"b
TargetFrequencyTimeUnitEnum"C
TargetFrequencyTimeUnit
UNSPECIFIED 
UNKNOWN

WEEKLYB�
"com.google.ads.googleads.v16.enumsBTargetFrequencyTimeUnitProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
8google/ads/googleads/v16/enums/targeting_dimension.protogoogle.ads.googleads.v16.enums"�
TargetingDimensionEnum"�
TargetingDimension
UNSPECIFIED 
UNKNOWN
KEYWORD
AUDIENCE	
TOPIC

GENDER
	AGE_RANGE
	PLACEMENT
PARENTAL_STATUS
INCOME_RANGE	B�
"com.google.ads.googleads.v16.enumsBTargetingDimensionProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
7google/ads/googleads/v16/common/targeting_setting.protogoogle.ads.googleads.v16.common"�
TargetingSettingO
target_restrictions (22.google.ads.googleads.v16.common.TargetRestrictionb
target_restriction_operations (2;.google.ads.googleads.v16.common.TargetRestrictionOperation"�
TargetRestrictionf
targeting_dimension (2I.google.ads.googleads.v16.enums.TargetingDimensionEnum.TargetingDimension
bid_only (H �B
	_bid_only"�
TargetRestrictionOperationV
operator (2D.google.ads.googleads.v16.common.TargetRestrictionOperation.OperatorA
value (22.google.ads.googleads.v16.common.TargetRestriction"=
Operator
UNSPECIFIED 
UNKNOWN
ADD

REMOVEB�
#com.google.ads.googleads.v16.commonBTargetingSettingProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v16/common;common�GAA�Google.Ads.GoogleAds.V16.Common�Google\\Ads\\GoogleAds\\V16\\Common�#Google::Ads::GoogleAds::V16::Commonbproto3
�
Lgoogle/ads/googleads/v16/enums/app_campaign_bidding_strategy_goal_type.protogoogle.ads.googleads.v16.enums"�
&AppCampaignBiddingStrategyGoalTypeEnum"�
"AppCampaignBiddingStrategyGoalType
UNSPECIFIED 
UNKNOWN)
%OPTIMIZE_INSTALLS_TARGET_INSTALL_COST3
/OPTIMIZE_IN_APP_CONVERSIONS_TARGET_INSTALL_COST6
2OPTIMIZE_IN_APP_CONVERSIONS_TARGET_CONVERSION_COST(
$OPTIMIZE_RETURN_ON_ADVERTISING_SPEND/
+OPTIMIZE_PRE_REGISTRATION_CONVERSION_VOLUME1
-OPTIMIZE_INSTALLS_WITHOUT_TARGET_INSTALL_COSTB�
"com.google.ads.googleads.v16.enumsB\'AppCampaignBiddingStrategyGoalTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
8google/ads/googleads/v16/enums/frequency_cap_level.protogoogle.ads.googleads.v16.enums"w
FrequencyCapLevelEnum"^
FrequencyCapLevel
UNSPECIFIED 
UNKNOWN
AD_GROUP_AD
AD_GROUP
CAMPAIGNB�
"com.google.ads.googleads.v16.enumsBFrequencyCapLevelProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
<google/ads/googleads/v16/enums/campaign_serving_status.protogoogle.ads.googleads.v16.enums"�
CampaignServingStatusEnum"s
CampaignServingStatus
UNSPECIFIED 
UNKNOWN
SERVING
NONE	
ENDED
PENDING
	SUSPENDEDB�
"com.google.ads.googleads.v16.enumsBCampaignServingStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
:google/ads/googleads/v16/enums/response_content_type.protogoogle.ads.googleads.v16.enums"o
ResponseContentTypeEnum"T
ResponseContentType
UNSPECIFIED 
RESOURCE_NAME_ONLY
MUTABLE_RESOURCEB�
"com.google.ads.googleads.v16.enumsBResponseContentTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
Cgoogle/ads/googleads/v16/enums/ad_serving_optimization_status.protogoogle.ads.googleads.v16.enums"�
AdServingOptimizationStatusEnum"�
AdServingOptimizationStatus
UNSPECIFIED 
UNKNOWN
OPTIMIZE
CONVERSION_OPTIMIZE

ROTATE
ROTATE_INDEFINITELY
UNAVAILABLEB�
"com.google.ads.googleads.v16.enumsB AdServingOptimizationStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
:google/ads/googleads/v16/enums/bidding_strategy_type.protogoogle.ads.googleads.v16.enums"�
BiddingStrategyTypeEnum"�
BiddingStrategyType
UNSPECIFIED 
UNKNOWN

COMMISSION
ENHANCED_CPC
INVALID

MANUAL_CPA

MANUAL_CPC

MANUAL_CPM

MANUAL_CPV
MAXIMIZE_CONVERSIONS

MAXIMIZE_CONVERSION_VALUE
PAGE_ONE_PROMOTED
PERCENT_CPC

TARGET_CPA

TARGET_CPM
TARGET_IMPRESSION_SHARE
TARGET_OUTRANK_SHARE
TARGET_ROAS
TARGET_SPEND	B�
"com.google.ads.googleads.v16.enumsBBiddingStrategyTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
=google/ads/googleads/v16/enums/advertising_channel_type.protogoogle.ads.googleads.v16.enums"�
AdvertisingChannelTypeEnum"�
AdvertisingChannelType
UNSPECIFIED 
UNKNOWN

SEARCH
DISPLAY
SHOPPING	
HOTEL	
VIDEO
MULTI_CHANNEL	
LOCAL	
SMART	
PERFORMANCE_MAX

LOCAL_SERVICES
	DISCOVERY

TRAVELB�
"com.google.ads.googleads.v16.enumsBAdvertisingChannelTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
<google/ads/googleads/v16/enums/asset_automation_status.protogoogle.ads.googleads.v16.enums"o
AssetAutomationStatusEnum"R
AssetAutomationStatus
UNSPECIFIED 
UNKNOWN
OPTED_IN
	OPTED_OUTB�
"com.google.ads.googleads.v16.enumsBAssetAutomationStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
4google/ads/googleads/v16/enums/campaign_status.protogoogle.ads.googleads.v16.enums"j
CampaignStatusEnum"T
CampaignStatus
UNSPECIFIED 
UNKNOWN
ENABLED

PAUSED
REMOVEDB�
"com.google.ads.googleads.v16.enumsBCampaignStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
=google/ads/googleads/v16/enums/brand_safety_suitability.protogoogle.ads.googleads.v16.enums"�
BrandSafetySuitabilityEnum"}
BrandSafetySuitability
UNSPECIFIED 
UNKNOWN
EXPANDED_INVENTORY
STANDARD_INVENTORY
LIMITED_INVENTORYB�
"com.google.ads.googleads.v16.enumsBBrandSafetySuitabilityProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
3google/ads/googleads/v16/common/frequency_cap.protogoogle.ads.googleads.v16.common8google/ads/googleads/v16/enums/frequency_cap_level.proto<google/ads/googleads/v16/enums/frequency_cap_time_unit.proto"l
FrequencyCapEntry=
key (20.google.ads.googleads.v16.common.FrequencyCapKey
cap (H �B
_cap"�
FrequencyCapKeyV
level (2G.google.ads.googleads.v16.enums.FrequencyCapLevelEnum.FrequencyCapLevelc

event_type (2O.google.ads.googleads.v16.enums.FrequencyCapEventTypeEnum.FrequencyCapEventType`
	time_unit (2M.google.ads.googleads.v16.enums.FrequencyCapTimeUnitEnum.FrequencyCapTimeUnit
time_length (H �B
_time_lengthB�
#com.google.ads.googleads.v16.commonBFrequencyCapProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v16/common;common�GAA�Google.Ads.GoogleAds.V16.Common�Google\\Ads\\GoogleAds\\V16\\Common�#Google::Ads::GoogleAds::V16::Commonbproto3
�
:google/ads/googleads/v16/enums/asset_automation_type.protogoogle.ads.googleads.v16.enums"i
AssetAutomationTypeEnum"N
AssetAutomationType
UNSPECIFIED 
UNKNOWN
TEXT_ASSET_AUTOMATIONB�
"com.google.ads.googleads.v16.enumsBAssetAutomationTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
Egoogle/ads/googleads/v16/enums/target_impression_share_location.protogoogle.ads.googleads.v16.enums"�
!TargetImpressionShareLocationEnum"~
TargetImpressionShareLocation
UNSPECIFIED 
UNKNOWN
ANYWHERE_ON_PAGE
TOP_OF_PAGE
ABSOLUTE_TOP_OF_PAGEB�
"com.google.ads.googleads.v16.enumsB"TargetImpressionShareLocationProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
-google/ads/googleads/v16/common/bidding.protogoogle.ads.googleads.v16.commonEgoogle/ads/googleads/v16/enums/target_impression_share_location.proto"L

Commission#
commission_rate_micros (H �B
_commission_rate_micros"
EnhancedCpc"
	ManualCpa"G
	ManualCpc!
enhanced_cpc_enabled (H �B
_enhanced_cpc_enabled"
	ManualCpm"
	ManualCpv"n
MaximizeConversions
cpc_bid_ceiling_micros (
cpc_bid_floor_micros (
target_cpa_micros ("l
MaximizeConversionValue
target_roas (
cpc_bid_ceiling_micros (
cpc_bid_floor_micros ("�
	TargetCpa
target_cpa_micros (H �#
cpc_bid_ceiling_micros (H�!
cpc_bid_floor_micros (H�B
_target_cpa_microsB
_cpc_bid_ceiling_microsB
_cpc_bid_floor_micros"s
	TargetCpm^
target_frequency_goal (2=.google.ads.googleads.v16.common.TargetCpmTargetFrequencyGoalH B
goal"�
TargetCpmTargetFrequencyGoal
target_count (f
	time_unit (2S.google.ads.googleads.v16.enums.TargetFrequencyTimeUnitEnum.TargetFrequencyTimeUnit"�
TargetImpressionShareq
location (2_.google.ads.googleads.v16.enums.TargetImpressionShareLocationEnum.TargetImpressionShareLocation%
location_fraction_micros (H �#
cpc_bid_ceiling_micros (H�B
_location_fraction_microsB
_cpc_bid_ceiling_micros"�

TargetRoas
target_roas (H �#
cpc_bid_ceiling_micros (H�!
cpc_bid_floor_micros (H�B
_target_roasB
_cpc_bid_ceiling_microsB
_cpc_bid_floor_micros"�
TargetSpend$
target_spend_micros (BH �#
cpc_bid_ceiling_micros (H�B
_target_spend_microsB
_cpc_bid_ceiling_micros"�

PercentCpc#
cpc_bid_ceiling_micros (H �!
enhanced_cpc_enabled (H�B
_cpc_bid_ceiling_microsB
_enhanced_cpc_enabledB�
#com.google.ads.googleads.v16.commonBBiddingProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v16/common;common�GAA�Google.Ads.GoogleAds.V16.Common�Google\\Ads\\GoogleAds\\V16\\Common�#Google::Ads::GoogleAds::V16::Commonbproto3
�
<google/ads/googleads/v16/enums/campaign_primary_status.protogoogle.ads.googleads.v16.enums"�
CampaignPrimaryStatusEnum"�
CampaignPrimaryStatus
UNSPECIFIED 
UNKNOWN
ELIGIBLE

PAUSED
REMOVED	
ENDED
PENDING
MISCONFIGURED
LIMITED
LEARNING	
NOT_ELIGIBLE
B�
"com.google.ads.googleads.v16.enumsBCampaignPrimaryStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
1google/ads/googleads/v16/enums/listing_type.protogoogle.ads.googleads.v16.enums"L
ListingTypeEnum"9
ListingType
UNSPECIFIED 
UNKNOWN
VEHICLESB�
"com.google.ads.googleads.v16.enumsBListingTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
1google/ads/googleads/v16/enums/payment_mode.protogoogle.ads.googleads.v16.enums"�
PaymentModeEnum"n
PaymentMode
UNSPECIFIED 
UNKNOWN

CLICKS
CONVERSION_VALUE
CONVERSIONS

GUEST_STAYB�
"com.google.ads.googleads.v16.enumsBPaymentModeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
Agoogle/ads/googleads/v16/enums/advertising_channel_sub_type.protogoogle.ads.googleads.v16.enums"�
AdvertisingChannelSubTypeEnum"�
AdvertisingChannelSubType
UNSPECIFIED 
UNKNOWN
SEARCH_MOBILE_APP
DISPLAY_MOBILE_APP
SEARCH_EXPRESS
DISPLAY_EXPRESS
SHOPPING_SMART_ADS
DISPLAY_GMAIL_AD
DISPLAY_SMART_CAMPAIGN
VIDEO_OUTSTREAM	
VIDEO_ACTION

VIDEO_NON_SKIPPABLE
APP_CAMPAIGN
APP_CAMPAIGN_FOR_ENGAGEMENT
LOCAL_CAMPAIGN#
SHOPPING_COMPARISON_LISTING_ADS
SMART_CAMPAIGN
VIDEO_SEQUENCE%
!APP_CAMPAIGN_FOR_PRE_REGISTRATION 
VIDEO_REACH_TARGET_FREQUENCY
TRAVEL_ACTIVITIESB�
"com.google.ads.googleads.v16.enumsBAdvertisingChannelSubTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
Cgoogle/ads/googleads/v16/enums/performance_max_upgrade_status.protogoogle.ads.googleads.v16.enums"�
PerformanceMaxUpgradeStatusEnum"�
PerformanceMaxUpgradeStatus
UNSPECIFIED 
UNKNOWN
UPGRADE_IN_PROGRESS
UPGRADE_COMPLETE
UPGRADE_FAILED
UPGRADE_ELIGIBLEB�
"com.google.ads.googleads.v16.enumsB PerformanceMaxUpgradeStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�Y
1google/ads/googleads/v16/resources/campaign.proto"google.ads.googleads.v16.resources6google/ads/googleads/v16/common/custom_parameter.proto3google/ads/googleads/v16/common/frequency_cap.proto?google/ads/googleads/v16/common/real_time_bidding_setting.proto7google/ads/googleads/v16/common/targeting_setting.protoCgoogle/ads/googleads/v16/enums/ad_serving_optimization_status.protoAgoogle/ads/googleads/v16/enums/advertising_channel_sub_type.proto=google/ads/googleads/v16/enums/advertising_channel_type.proto;google/ads/googleads/v16/enums/app_campaign_app_store.protoLgoogle/ads/googleads/v16/enums/app_campaign_bidding_strategy_goal_type.proto<google/ads/googleads/v16/enums/asset_automation_status.proto:google/ads/googleads/v16/enums/asset_automation_type.proto5google/ads/googleads/v16/enums/asset_field_type.proto3google/ads/googleads/v16/enums/asset_set_type.protoCgoogle/ads/googleads/v16/enums/bidding_strategy_system_status.proto:google/ads/googleads/v16/enums/bidding_strategy_type.proto=google/ads/googleads/v16/enums/brand_safety_suitability.proto=google/ads/googleads/v16/enums/campaign_experiment_type.proto<google/ads/googleads/v16/enums/campaign_primary_status.protoCgoogle/ads/googleads/v16/enums/campaign_primary_status_reason.proto<google/ads/googleads/v16/enums/campaign_serving_status.proto4google/ads/googleads/v16/enums/campaign_status.proto1google/ads/googleads/v16/enums/listing_type.proto9google/ads/googleads/v16/enums/location_source_type.proto=google/ads/googleads/v16/enums/negative_geo_target_type.proto;google/ads/googleads/v16/enums/optimization_goal_type.proto1google/ads/googleads/v16/enums/payment_mode.protoCgoogle/ads/googleads/v16/enums/performance_max_upgrade_status.proto=google/ads/googleads/v16/enums/positive_geo_target_type.protoCgoogle/ads/googleads/v16/enums/vanity_pharma_display_url_mode.proto7google/ads/googleads/v16/enums/vanity_pharma_text.protogoogle/api/field_behavior.protogoogle/api/resource.proto"�G
Campaign@
resource_name (	B)�A�A#
!googleads.googleapis.com/Campaign
id; (B�AH�
name: (	H�l
primary_statusQ (2O.google.ads.googleads.v16.enums.CampaignPrimaryStatusEnum.CampaignPrimaryStatusB�A�
primary_status_reasonsR (2[.google.ads.googleads.v16.enums.CampaignPrimaryStatusReasonEnum.CampaignPrimaryStatusReasonB�AQ
status (2A.google.ads.googleads.v16.enums.CampaignStatusEnum.CampaignStatusl
serving_status (2O.google.ads.googleads.v16.enums.CampaignServingStatusEnum.CampaignServingStatusB�A�
bidding_strategy_system_statusN (2[.google.ads.googleads.v16.enums.BiddingStrategySystemStatusEnum.BiddingStrategySystemStatusB�A�
ad_serving_optimization_status (2[.google.ads.googleads.v16.enums.AdServingOptimizationStatusEnum.AdServingOptimizationStatusx
advertising_channel_type	 (2Q.google.ads.googleads.v16.enums.AdvertisingChannelTypeEnum.AdvertisingChannelTypeB�A�
advertising_channel_sub_type
 (2W.google.ads.googleads.v16.enums.AdvertisingChannelSubTypeEnum.AdvertisingChannelSubTypeB�A"
tracking_url_template< (	H�O
url_custom_parameters (20.google.ads.googleads.v16.common.CustomParametert
 local_services_campaign_settingsK (2J.google.ads.googleads.v16.resources.Campaign.LocalServicesCampaignSettingse
travel_campaign_settingsU (2C.google.ads.googleads.v16.resources.Campaign.TravelCampaignSettingsk
discovery_campaign_settingsW (2F.google.ads.googleads.v16.resources.Campaign.DiscoveryCampaignSettingsZ
real_time_bidding_setting\' (27.google.ads.googleads.v16.common.RealTimeBiddingSettingV
network_settings (2<.google.ads.googleads.v16.resources.Campaign.NetworkSettingsY
hotel_setting  (2=.google.ads.googleads.v16.resources.Campaign.HotelSettingInfoB�Ah
dynamic_search_ads_setting! (2D.google.ads.googleads.v16.resources.Campaign.DynamicSearchAdsSettingV
shopping_setting$ (2<.google.ads.googleads.v16.resources.Campaign.ShoppingSettingL
targeting_setting+ (21.google.ads.googleads.v16.common.TargetingSetting`
audience_settingI (2<.google.ads.googleads.v16.resources.Campaign.AudienceSettingB�AH�b
geo_target_type_setting/ (2A.google.ads.googleads.v16.resources.Campaign.GeoTargetTypeSettinga
local_campaign_setting2 (2A.google.ads.googleads.v16.resources.Campaign.LocalCampaignSetting]
app_campaign_setting3 (2?.google.ads.googleads.v16.resources.Campaign.AppCampaignSetting>
labels= (	B.�A�A(
&googleads.googleapis.com/CampaignLabelo
experiment_type (2Q.google.ads.googleads.v16.enums.CampaignExperimentTypeEnum.CampaignExperimentTypeB�AE
base_campaign8 (	B)�A�A#
!googleads.googleapis.com/CampaignH�J
campaign_budget> (	B,�A)
\'googleads.googleapis.com/CampaignBudgetH�o
bidding_strategy_type (2K.google.ads.googleads.v16.enums.BiddingStrategyTypeEnum.BiddingStrategyTypeB�A_
accessible_bidding_strategyG (	B:�A�A4
2googleads.googleapis.com/AccessibleBiddingStrategy

start_date? (	H�H
campaign_groupL (	B+�A(
&googleads.googleapis.com/CampaignGroupH�
end_date@ (	H	�
final_url_suffixA (	H
�J
frequency_caps( (22.google.ads.googleads.v16.common.FrequencyCapEntry~
video_brand_safety_suitability* (2Q.google.ads.googleads.v16.enums.BrandSafetySuitabilityEnum.BrandSafetySuitabilityB�AP
vanity_pharma, (29.google.ads.googleads.v16.resources.Campaign.VanityPharmab
selective_optimization- (2B.google.ads.googleads.v16.resources.Campaign.SelectiveOptimizationg
optimization_goal_setting6 (2D.google.ads.googleads.v16.resources.Campaign.OptimizationGoalSetting[
tracking_setting. (2<.google.ads.googleads.v16.resources.Campaign.TrackingSettingB�AQ
payment_mode4 (2;.google.ads.googleads.v16.enums.PaymentModeEnum.PaymentMode$
optimization_scoreB (B�AH�l
!excluded_parent_asset_field_typesE (2A.google.ads.googleads.v16.enums.AssetFieldTypeEnum.AssetFieldTypef
excluded_parent_asset_set_typesP (2=.google.ads.googleads.v16.enums.AssetSetTypeEnum.AssetSetType"
url_expansion_opt_outH (H�h
performance_max_upgradeM (2B.google.ads.googleads.v16.resources.Campaign.PerformanceMaxUpgradeB�AP
hotel_property_asset_setS (	B)�A�A#
!googleads.googleapis.com/AssetSetH�[
listing_typeV (2;.google.ads.googleads.v16.enums.ListingTypeEnum.ListingTypeB�AH�f
asset_automation_settingsX (2C.google.ads.googleads.v16.resources.Campaign.AssetAutomationSettingI
bidding_strategyC (	B-�A*
(googleads.googleapis.com/BiddingStrategyH A

commission1 (2+.google.ads.googleads.v16.common.CommissionH @

manual_cpaJ (2*.google.ads.googleads.v16.common.ManualCpaH @

manual_cpc (2*.google.ads.googleads.v16.common.ManualCpcH @

manual_cpm (2*.google.ads.googleads.v16.common.ManualCpmH @

manual_cpv% (2*.google.ads.googleads.v16.common.ManualCpvH T
maximize_conversions (24.google.ads.googleads.v16.common.MaximizeConversionsH ]
maximize_conversion_value (28.google.ads.googleads.v16.common.MaximizeConversionValueH @

target_cpa (2*.google.ads.googleads.v16.common.TargetCpaH Y
target_impression_share0 (26.google.ads.googleads.v16.common.TargetImpressionShareH B
target_roas (2+.google.ads.googleads.v16.common.TargetRoasH D
target_spend (2,.google.ads.googleads.v16.common.TargetSpendH B
percent_cpc" (2+.google.ads.googleads.v16.common.PercentCpcH @

target_cpm) (2*.google.ads.googleads.v16.common.TargetCpmH �
PerformanceMaxUpgradeK
performance_max_campaign (	B)�A�A#
!googleads.googleapis.com/CampaignG
pre_upgrade_campaign (	B)�A�A#
!googleads.googleapis.com/Campaignp
status (2[.google.ads.googleads.v16.enums.PerformanceMaxUpgradeStatusEnum.PerformanceMaxUpgradeStatusB�A�
NetworkSettings!
target_google_search (H �"
target_search_network (H�#
target_content_network (H�*
target_partner_search_network (H�
target_youtube	 (H�%
target_google_tv_network
 (H�B
_target_google_searchB
_target_search_networkB
_target_content_networkB 
_target_partner_search_networkB
_target_youtubeB
_target_google_tv_networkI
HotelSettingInfo!
hotel_center_id (B�AH �B
_hotel_center_id�
DynamicSearchAdsSetting
domain_name (	B�A
language_code (	B�A#
use_supplied_urls_only (H �1
feeds	 (	B"�A
googleads.googleapis.com/FeedB
_use_supplied_urls_only�
ShoppingSetting
merchant_id (H �

feed_label
 (	
campaign_priority (H�
enable_local (H�"
use_vehicle_inventory	 (B�A$
advertising_partner_ids (B�A!
disable_product_feed (H�B
_merchant_idB
_campaign_priorityB
_enable_localB
_disable_product_feedB
TrackingSetting
tracking_url (	B�AH �B
_tracking_url�
GeoTargetTypeSettingq
positive_geo_target_type (2O.google.ads.googleads.v16.enums.PositiveGeoTargetTypeEnum.PositiveGeoTargetTypeq
negative_geo_target_type (2O.google.ads.googleads.v16.enums.NegativeGeoTargetTypeEnum.NegativeGeoTargetType
LocalCampaignSettingg
location_source_type (2I.google.ads.googleads.v16.enums.LocationSourceTypeEnum.LocationSourceType�
AppCampaignSetting�
bidding_strategy_goal_type (2i.google.ads.googleads.v16.enums.AppCampaignBiddingStrategyGoalTypeEnum.AppCampaignBiddingStrategyGoalType
app_id (	B�AH �c
	app_store (2K.google.ads.googleads.v16.enums.AppCampaignAppStoreEnum.AppCampaignAppStoreB�AB	
_app_id�
VanityPharma�
vanity_pharma_display_url_mode (2Y.google.ads.googleads.v16.enums.VanityPharmaDisplayUrlModeEnum.VanityPharmaDisplayUrlModea
vanity_pharma_text (2E.google.ads.googleads.v16.enums.VanityPharmaTextEnum.VanityPharmaTextc
SelectiveOptimizationJ
conversion_actions (	B.�A+
)googleads.googleapis.com/ConversionAction�
OptimizationGoalSettingn
optimization_goal_types (2M.google.ads.googleads.v16.enums.OptimizationGoalTypeEnum.OptimizationGoalTypeR
AudienceSetting&
use_audience_grouped (B�AH �B
_use_audience_groupedp
LocalServicesCampaignSettingsO
category_bids (28.google.ads.googleads.v16.resources.Campaign.CategoryBidu
CategoryBid
category_id (	H �"
manual_cpa_bid_micros (H�B
_category_idB
_manual_cpa_bid_microsS
TravelCampaignSettings#
travel_account_id (B�AH �B
_travel_account_idX
DiscoveryCampaignSettings$
upgraded_targeting (B�AH �B
_upgraded_targeting�
AssetAutomationSettingo
asset_automation_type (2K.google.ads.googleads.v16.enums.AssetAutomationTypeEnum.AssetAutomationTypeH �u
asset_automation_status (2O.google.ads.googleads.v16.enums.AssetAutomationStatusEnum.AssetAutomationStatusH�B
_asset_automation_typeB
_asset_automation_status:W�AT
!googleads.googleapis.com/Campaign/customers/{customer_id}/campaigns/{campaign_id}B
campaign_bidding_strategyB
_idB
_nameB
_tracking_url_templateB
_audience_settingB
_base_campaignB
_campaign_budgetB
_start_dateB
_campaign_groupB
	_end_dateB
_final_url_suffixB
_optimization_scoreB
_url_expansion_opt_outB
_hotel_property_asset_setB
_listing_typeB�
&com.google.ads.googleads.v16.resourcesBCampaignProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v16/resources;resources�GAA�"Google.Ads.GoogleAds.V16.Resources�"Google\\Ads\\GoogleAds\\V16\\Resources�&Google::Ads::GoogleAds::V16::Resourcesbproto3
�
8google/ads/googleads/v16/services/campaign_service.proto!google.ads.googleads.v16.services1google/ads/googleads/v16/resources/campaign.protogoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto google/protobuf/field_mask.protogoogle/rpc/status.proto"�
MutateCampaignsRequest
customer_id (	B�AM

operations (24.google.ads.googleads.v16.services.CampaignOperationB�A
partial_failure (
validate_only (j
response_content_type (2K.google.ads.googleads.v16.enums.ResponseContentTypeEnum.ResponseContentType"�
CampaignOperation/
update_mask (2.google.protobuf.FieldMask>
create (2,.google.ads.googleads.v16.resources.CampaignH >
update (2,.google.ads.googleads.v16.resources.CampaignH 8
remove (	B&�A#
!googleads.googleapis.com/CampaignH B
	operation"�
MutateCampaignsResponse1
partial_failure_error (2.google.rpc.StatusH
results (27.google.ads.googleads.v16.services.MutateCampaignResult"�
MutateCampaignResult=
resource_name (	B&�A#
!googleads.googleapis.com/Campaign>
campaign (2,.google.ads.googleads.v16.resources.Campaign2�
CampaignService�
MutateCampaigns9.google.ads.googleads.v16.services.MutateCampaignsRequest:.google.ads.googleads.v16.services.MutateCampaignsResponse"S�Acustomer_id,operations���4"//v16/customers/{customer_id=*}/campaigns:mutate:*E�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
%com.google.ads.googleads.v16.servicesBCampaignServiceProtoPZIgoogle.golang.org/genproto/googleapis/ads/googleads/v16/services;services�GAA�!Google.Ads.GoogleAds.V16.Services�!Google\\Ads\\GoogleAds\\V16\\Services�%Google::Ads::GoogleAds::V16::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

