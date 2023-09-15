<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/resources/campaign.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V14\Resources;

class Campaign
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
9google/ads/googleads/v14/enums/location_source_type.protogoogle.ads.googleads.v14.enums"s
LocationSourceTypeEnum"Y
LocationSourceType
UNSPECIFIED 
UNKNOWN
GOOGLE_MY_BUSINESS
	AFFILIATEB�
"com.google.ads.googleads.v14.enumsBLocationSourceTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v14/enums;enums�GAA�Google.Ads.GoogleAds.V14.Enums�Google\\Ads\\GoogleAds\\V14\\Enums�"Google::Ads::GoogleAds::V14::Enumsbproto3
�
Cgoogle/ads/googleads/v14/enums/performance_max_upgrade_status.protogoogle.ads.googleads.v14.enums"�
PerformanceMaxUpgradeStatusEnum"�
PerformanceMaxUpgradeStatus
UNSPECIFIED 
UNKNOWN
UPGRADE_ELIBIGLE
UPGRADE_IN_PROGRESS
UPGRADE_COMPLETE
UPGRADE_FAILEDB�
"com.google.ads.googleads.v14.enumsB PerformanceMaxUpgradeStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v14/enums;enums�GAA�Google.Ads.GoogleAds.V14.Enums�Google\\Ads\\GoogleAds\\V14\\Enums�"Google::Ads::GoogleAds::V14::Enumsbproto3
�
:google/ads/googleads/v14/enums/bidding_strategy_type.protogoogle.ads.googleads.v14.enums"�
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
"com.google.ads.googleads.v14.enumsBBiddingStrategyTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v14/enums;enums�GAA�Google.Ads.GoogleAds.V14.Enums�Google\\Ads\\GoogleAds\\V14\\Enums�"Google::Ads::GoogleAds::V14::Enumsbproto3
�
5google/ads/googleads/v14/enums/asset_field_type.protogoogle.ads.googleads.v14.enums"�
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
"com.google.ads.googleads.v14.enumsBAssetFieldTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v14/enums;enums�GAA�Google.Ads.GoogleAds.V14.Enums�Google\\Ads\\GoogleAds\\V14\\Enums�"Google::Ads::GoogleAds::V14::Enumsbproto3
�
Agoogle/ads/googleads/v14/enums/advertising_channel_sub_type.protogoogle.ads.googleads.v14.enums"�
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
"com.google.ads.googleads.v14.enumsBAdvertisingChannelSubTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v14/enums;enums�GAA�Google.Ads.GoogleAds.V14.Enums�Google\\Ads\\GoogleAds\\V14\\Enums�"Google::Ads::GoogleAds::V14::Enumsbproto3
�
Cgoogle/ads/googleads/v14/enums/ad_serving_optimization_status.protogoogle.ads.googleads.v14.enums"�
AdServingOptimizationStatusEnum"�
AdServingOptimizationStatus
UNSPECIFIED 
UNKNOWN
OPTIMIZE
CONVERSION_OPTIMIZE

ROTATE
ROTATE_INDEFINITELY
UNAVAILABLEB�
"com.google.ads.googleads.v14.enumsB AdServingOptimizationStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v14/enums;enums�GAA�Google.Ads.GoogleAds.V14.Enums�Google\\Ads\\GoogleAds\\V14\\Enums�"Google::Ads::GoogleAds::V14::Enumsbproto3
�
;google/ads/googleads/v14/enums/app_campaign_app_store.protogoogle.ads.googleads.v14.enums"y
AppCampaignAppStoreEnum"^
AppCampaignAppStore
UNSPECIFIED 
UNKNOWN
APPLE_APP_STORE
GOOGLE_APP_STOREB�
"com.google.ads.googleads.v14.enumsBAppCampaignAppStoreProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v14/enums;enums�GAA�Google.Ads.GoogleAds.V14.Enums�Google\\Ads\\GoogleAds\\V14\\Enums�"Google::Ads::GoogleAds::V14::Enumsbproto3
�
;google/ads/googleads/v14/enums/optimization_goal_type.protogoogle.ads.googleads.v14.enums"�
OptimizationGoalTypeEnum"w
OptimizationGoalType
UNSPECIFIED 
UNKNOWN
CALL_CLICKS
DRIVING_DIRECTIONS
APP_PRE_REGISTRATIONB�
"com.google.ads.googleads.v14.enumsBOptimizationGoalTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v14/enums;enums�GAA�Google.Ads.GoogleAds.V14.Enums�Google\\Ads\\GoogleAds\\V14\\Enums�"Google::Ads::GoogleAds::V14::Enumsbproto3
�
=google/ads/googleads/v14/enums/positive_geo_target_type.protogoogle.ads.googleads.v14.enums"�
PositiveGeoTargetTypeEnum"r
PositiveGeoTargetType
UNSPECIFIED 
UNKNOWN
PRESENCE_OR_INTEREST
SEARCH_INTEREST
PRESENCEB�
"com.google.ads.googleads.v14.enumsBPositiveGeoTargetTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v14/enums;enums�GAA�Google.Ads.GoogleAds.V14.Enums�Google\\Ads\\GoogleAds\\V14\\Enums�"Google::Ads::GoogleAds::V14::Enumsbproto3
�
7google/ads/googleads/v14/enums/vanity_pharma_text.protogoogle.ads.googleads.v14.enums"�
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
"com.google.ads.googleads.v14.enumsBVanityPharmaTextProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v14/enums;enums�GAA�Google.Ads.GoogleAds.V14.Enums�Google\\Ads\\GoogleAds\\V14\\Enums�"Google::Ads::GoogleAds::V14::Enumsbproto3
�
?google/ads/googleads/v14/enums/target_frequency_time_unit.protogoogle.ads.googleads.v14.enums"b
TargetFrequencyTimeUnitEnum"C
TargetFrequencyTimeUnit
UNSPECIFIED 
UNKNOWN

WEEKLYB�
"com.google.ads.googleads.v14.enumsBTargetFrequencyTimeUnitProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v14/enums;enums�GAA�Google.Ads.GoogleAds.V14.Enums�Google\\Ads\\GoogleAds\\V14\\Enums�"Google::Ads::GoogleAds::V14::Enumsbproto3
�
=google/ads/googleads/v14/enums/negative_geo_target_type.protogoogle.ads.googleads.v14.enums"z
NegativeGeoTargetTypeEnum"]
NegativeGeoTargetType
UNSPECIFIED 
UNKNOWN
PRESENCE_OR_INTEREST
PRESENCEB�
"com.google.ads.googleads.v14.enumsBNegativeGeoTargetTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v14/enums;enums�GAA�Google.Ads.GoogleAds.V14.Enums�Google\\Ads\\GoogleAds\\V14\\Enums�"Google::Ads::GoogleAds::V14::Enumsbproto3
�
Cgoogle/ads/googleads/v14/enums/vanity_pharma_display_url_mode.protogoogle.ads.googleads.v14.enums"�
VanityPharmaDisplayUrlModeEnum"q
VanityPharmaDisplayUrlMode
UNSPECIFIED 
UNKNOWN
MANUFACTURER_WEBSITE_URL
WEBSITE_DESCRIPTIONB�
"com.google.ads.googleads.v14.enumsBVanityPharmaDisplayUrlModeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v14/enums;enums�GAA�Google.Ads.GoogleAds.V14.Enums�Google\\Ads\\GoogleAds\\V14\\Enums�"Google::Ads::GoogleAds::V14::Enumsbproto3
�
8google/ads/googleads/v14/enums/targeting_dimension.protogoogle.ads.googleads.v14.enums"�
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
"com.google.ads.googleads.v14.enumsBTargetingDimensionProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v14/enums;enums�GAA�Google.Ads.GoogleAds.V14.Enums�Google\\Ads\\GoogleAds\\V14\\Enums�"Google::Ads::GoogleAds::V14::Enumsbproto3
�
7google/ads/googleads/v14/common/targeting_setting.protogoogle.ads.googleads.v14.common"�
TargetingSettingO
target_restrictions (22.google.ads.googleads.v14.common.TargetRestrictionb
target_restriction_operations (2;.google.ads.googleads.v14.common.TargetRestrictionOperation"�
TargetRestrictionf
targeting_dimension (2I.google.ads.googleads.v14.enums.TargetingDimensionEnum.TargetingDimension
bid_only (H �B
	_bid_only"�
TargetRestrictionOperationV
operator (2D.google.ads.googleads.v14.common.TargetRestrictionOperation.OperatorA
value (22.google.ads.googleads.v14.common.TargetRestriction"=
Operator
UNSPECIFIED 
UNKNOWN
ADD

REMOVEB�
#com.google.ads.googleads.v14.commonBTargetingSettingProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v14/common;common�GAA�Google.Ads.GoogleAds.V14.Common�Google\\Ads\\GoogleAds\\V14\\Common�#Google::Ads::GoogleAds::V14::Commonbproto3
�
4google/ads/googleads/v14/enums/campaign_status.protogoogle.ads.googleads.v14.enums"j
CampaignStatusEnum"T
CampaignStatus
UNSPECIFIED 
UNKNOWN
ENABLED

PAUSED
REMOVEDB�
"com.google.ads.googleads.v14.enumsBCampaignStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v14/enums;enums�GAA�Google.Ads.GoogleAds.V14.Enums�Google\\Ads\\GoogleAds\\V14\\Enums�"Google::Ads::GoogleAds::V14::Enumsbproto3
�
?google/ads/googleads/v14/common/real_time_bidding_setting.protogoogle.ads.googleads.v14.common"8
RealTimeBiddingSetting
opt_in (H �B	
_opt_inB�
#com.google.ads.googleads.v14.commonBRealTimeBiddingSettingProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v14/common;common�GAA�Google.Ads.GoogleAds.V14.Common�Google\\Ads\\GoogleAds\\V14\\Common�#Google::Ads::GoogleAds::V14::Commonbproto3
�
<google/ads/googleads/v14/enums/frequency_cap_time_unit.protogoogle.ads.googleads.v14.enums"n
FrequencyCapTimeUnitEnum"R
FrequencyCapTimeUnit
UNSPECIFIED 
UNKNOWN
DAY
WEEK	
MONTHB�
"com.google.ads.googleads.v14.enumsBFrequencyCapTimeUnitProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v14/enums;enums�GAA�Google.Ads.GoogleAds.V14.Enums�Google\\Ads\\GoogleAds\\V14\\Enums�"Google::Ads::GoogleAds::V14::Enumsbproto3
�
8google/ads/googleads/v14/enums/frequency_cap_level.protogoogle.ads.googleads.v14.enums"w
FrequencyCapLevelEnum"^
FrequencyCapLevel
UNSPECIFIED 
UNKNOWN
AD_GROUP_AD
AD_GROUP
CAMPAIGNB�
"com.google.ads.googleads.v14.enumsBFrequencyCapLevelProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v14/enums;enums�GAA�Google.Ads.GoogleAds.V14.Enums�Google\\Ads\\GoogleAds\\V14\\Enums�"Google::Ads::GoogleAds::V14::Enumsbproto3
�
<google/ads/googleads/v14/enums/campaign_serving_status.protogoogle.ads.googleads.v14.enums"�
CampaignServingStatusEnum"s
CampaignServingStatus
UNSPECIFIED 
UNKNOWN
SERVING
NONE	
ENDED
PENDING
	SUSPENDEDB�
"com.google.ads.googleads.v14.enumsBCampaignServingStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v14/enums;enums�GAA�Google.Ads.GoogleAds.V14.Enums�Google\\Ads\\GoogleAds\\V14\\Enums�"Google::Ads::GoogleAds::V14::Enumsbproto3
�
1google/ads/googleads/v14/enums/listing_type.protogoogle.ads.googleads.v14.enums"L
ListingTypeEnum"9
ListingType
UNSPECIFIED 
UNKNOWN
VEHICLESB�
"com.google.ads.googleads.v14.enumsBListingTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v14/enums;enums�GAA�Google.Ads.GoogleAds.V14.Enums�Google\\Ads\\GoogleAds\\V14\\Enums�"Google::Ads::GoogleAds::V14::Enumsbproto3
�
1google/ads/googleads/v14/enums/payment_mode.protogoogle.ads.googleads.v14.enums"�
PaymentModeEnum"n
PaymentMode
UNSPECIFIED 
UNKNOWN

CLICKS
CONVERSION_VALUE
CONVERSIONS

GUEST_STAYB�
"com.google.ads.googleads.v14.enumsBPaymentModeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v14/enums;enums�GAA�Google.Ads.GoogleAds.V14.Enums�Google\\Ads\\GoogleAds\\V14\\Enums�"Google::Ads::GoogleAds::V14::Enumsbproto3
�
Cgoogle/ads/googleads/v14/enums/bidding_strategy_system_status.protogoogle.ads.googleads.v14.enums"�
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
"com.google.ads.googleads.v14.enumsB BiddingStrategySystemStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v14/enums;enums�GAA�Google.Ads.GoogleAds.V14.Enums�Google\\Ads\\GoogleAds\\V14\\Enums�"Google::Ads::GoogleAds::V14::Enumsbproto3
�
<google/ads/googleads/v14/enums/campaign_primary_status.protogoogle.ads.googleads.v14.enums"�
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
"com.google.ads.googleads.v14.enumsBCampaignPrimaryStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v14/enums;enums�GAA�Google.Ads.GoogleAds.V14.Enums�Google\\Ads\\GoogleAds\\V14\\Enums�"Google::Ads::GoogleAds::V14::Enumsbproto3
�
3google/ads/googleads/v14/enums/asset_set_type.protogoogle.ads.googleads.v14.enums"�
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
"com.google.ads.googleads.v14.enumsBAssetSetTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v14/enums;enums�GAA�Google.Ads.GoogleAds.V14.Enums�Google\\Ads\\GoogleAds\\V14\\Enums�"Google::Ads::GoogleAds::V14::Enumsbproto3
�
Egoogle/ads/googleads/v14/enums/target_impression_share_location.protogoogle.ads.googleads.v14.enums"�
!TargetImpressionShareLocationEnum"~
TargetImpressionShareLocation
UNSPECIFIED 
UNKNOWN
ANYWHERE_ON_PAGE
TOP_OF_PAGE
ABSOLUTE_TOP_OF_PAGEB�
"com.google.ads.googleads.v14.enumsB"TargetImpressionShareLocationProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v14/enums;enums�GAA�Google.Ads.GoogleAds.V14.Enums�Google\\Ads\\GoogleAds\\V14\\Enums�"Google::Ads::GoogleAds::V14::Enumsbproto3
�
=google/ads/googleads/v14/enums/campaign_experiment_type.protogoogle.ads.googleads.v14.enums"y
CampaignExperimentTypeEnum"[
CampaignExperimentType
UNSPECIFIED 
UNKNOWN
BASE	
DRAFT

EXPERIMENTB�
"com.google.ads.googleads.v14.enumsBCampaignExperimentTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v14/enums;enums�GAA�Google.Ads.GoogleAds.V14.Enums�Google\\Ads\\GoogleAds\\V14\\Enums�"Google::Ads::GoogleAds::V14::Enumsbproto3
�
=google/ads/googleads/v14/enums/advertising_channel_type.protogoogle.ads.googleads.v14.enums"�
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
"com.google.ads.googleads.v14.enumsBAdvertisingChannelTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v14/enums;enums�GAA�Google.Ads.GoogleAds.V14.Enums�Google\\Ads\\GoogleAds\\V14\\Enums�"Google::Ads::GoogleAds::V14::Enumsbproto3
�
=google/ads/googleads/v14/enums/brand_safety_suitability.protogoogle.ads.googleads.v14.enums"�
BrandSafetySuitabilityEnum"}
BrandSafetySuitability
UNSPECIFIED 
UNKNOWN
EXPANDED_INVENTORY
STANDARD_INVENTORY
LIMITED_INVENTORYB�
"com.google.ads.googleads.v14.enumsBBrandSafetySuitabilityProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v14/enums;enums�GAA�Google.Ads.GoogleAds.V14.Enums�Google\\Ads\\GoogleAds\\V14\\Enums�"Google::Ads::GoogleAds::V14::Enumsbproto3
�
Lgoogle/ads/googleads/v14/enums/app_campaign_bidding_strategy_goal_type.protogoogle.ads.googleads.v14.enums"�
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
"com.google.ads.googleads.v14.enumsB\'AppCampaignBiddingStrategyGoalTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v14/enums;enums�GAA�Google.Ads.GoogleAds.V14.Enums�Google\\Ads\\GoogleAds\\V14\\Enums�"Google::Ads::GoogleAds::V14::Enumsbproto3
�

Cgoogle/ads/googleads/v14/enums/campaign_primary_status_reason.protogoogle.ads.googleads.v14.enums"�
CampaignPrimaryStatusReasonEnum"�
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
APP_PARTIALLY_RELEASED!B�
"com.google.ads.googleads.v14.enumsB CampaignPrimaryStatusReasonProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v14/enums;enums�GAA�Google.Ads.GoogleAds.V14.Enums�Google\\Ads\\GoogleAds\\V14\\Enums�"Google::Ads::GoogleAds::V14::Enumsbproto3
�
-google/ads/googleads/v14/common/bidding.protogoogle.ads.googleads.v14.commonEgoogle/ads/googleads/v14/enums/target_impression_share_location.proto"L

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
target_frequency_goal (2=.google.ads.googleads.v14.common.TargetCpmTargetFrequencyGoalH B
goal"�
TargetCpmTargetFrequencyGoal
target_count (f
	time_unit (2S.google.ads.googleads.v14.enums.TargetFrequencyTimeUnitEnum.TargetFrequencyTimeUnit"�
TargetImpressionShareq
location (2_.google.ads.googleads.v14.enums.TargetImpressionShareLocationEnum.TargetImpressionShareLocation%
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
#com.google.ads.googleads.v14.commonBBiddingProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v14/common;common�GAA�Google.Ads.GoogleAds.V14.Common�Google\\Ads\\GoogleAds\\V14\\Common�#Google::Ads::GoogleAds::V14::Commonbproto3
�
6google/ads/googleads/v14/common/custom_parameter.protogoogle.ads.googleads.v14.common"I
CustomParameter
key (	H �
value (	H�B
_keyB
_valueB�
#com.google.ads.googleads.v14.commonBCustomParameterProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v14/common;common�GAA�Google.Ads.GoogleAds.V14.Common�Google\\Ads\\GoogleAds\\V14\\Common�#Google::Ads::GoogleAds::V14::Commonbproto3
�
=google/ads/googleads/v14/enums/frequency_cap_event_type.protogoogle.ads.googleads.v14.enums"r
FrequencyCapEventTypeEnum"U
FrequencyCapEventType
UNSPECIFIED 
UNKNOWN

IMPRESSION

VIDEO_VIEWB�
"com.google.ads.googleads.v14.enumsBFrequencyCapEventTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v14/enums;enums�GAA�Google.Ads.GoogleAds.V14.Enums�Google\\Ads\\GoogleAds\\V14\\Enums�"Google::Ads::GoogleAds::V14::Enumsbproto3
�
3google/ads/googleads/v14/common/frequency_cap.protogoogle.ads.googleads.v14.common8google/ads/googleads/v14/enums/frequency_cap_level.proto<google/ads/googleads/v14/enums/frequency_cap_time_unit.proto"l
FrequencyCapEntry=
key (20.google.ads.googleads.v14.common.FrequencyCapKey
cap (H �B
_cap"�
FrequencyCapKeyV
level (2G.google.ads.googleads.v14.enums.FrequencyCapLevelEnum.FrequencyCapLevelc

event_type (2O.google.ads.googleads.v14.enums.FrequencyCapEventTypeEnum.FrequencyCapEventType`
	time_unit (2M.google.ads.googleads.v14.enums.FrequencyCapTimeUnitEnum.FrequencyCapTimeUnit
time_length (H �B
_time_lengthB�
#com.google.ads.googleads.v14.commonBFrequencyCapProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v14/common;common�GAA�Google.Ads.GoogleAds.V14.Common�Google\\Ads\\GoogleAds\\V14\\Common�#Google::Ads::GoogleAds::V14::Commonbproto3
�R
1google/ads/googleads/v14/resources/campaign.proto"google.ads.googleads.v14.resources6google/ads/googleads/v14/common/custom_parameter.proto3google/ads/googleads/v14/common/frequency_cap.proto?google/ads/googleads/v14/common/real_time_bidding_setting.proto7google/ads/googleads/v14/common/targeting_setting.protoCgoogle/ads/googleads/v14/enums/ad_serving_optimization_status.protoAgoogle/ads/googleads/v14/enums/advertising_channel_sub_type.proto=google/ads/googleads/v14/enums/advertising_channel_type.proto;google/ads/googleads/v14/enums/app_campaign_app_store.protoLgoogle/ads/googleads/v14/enums/app_campaign_bidding_strategy_goal_type.proto5google/ads/googleads/v14/enums/asset_field_type.proto3google/ads/googleads/v14/enums/asset_set_type.protoCgoogle/ads/googleads/v14/enums/bidding_strategy_system_status.proto:google/ads/googleads/v14/enums/bidding_strategy_type.proto=google/ads/googleads/v14/enums/brand_safety_suitability.proto=google/ads/googleads/v14/enums/campaign_experiment_type.proto<google/ads/googleads/v14/enums/campaign_primary_status.protoCgoogle/ads/googleads/v14/enums/campaign_primary_status_reason.proto<google/ads/googleads/v14/enums/campaign_serving_status.proto4google/ads/googleads/v14/enums/campaign_status.proto1google/ads/googleads/v14/enums/listing_type.proto9google/ads/googleads/v14/enums/location_source_type.proto=google/ads/googleads/v14/enums/negative_geo_target_type.proto;google/ads/googleads/v14/enums/optimization_goal_type.proto1google/ads/googleads/v14/enums/payment_mode.protoCgoogle/ads/googleads/v14/enums/performance_max_upgrade_status.proto=google/ads/googleads/v14/enums/positive_geo_target_type.protoCgoogle/ads/googleads/v14/enums/vanity_pharma_display_url_mode.proto7google/ads/googleads/v14/enums/vanity_pharma_text.protogoogle/api/field_behavior.protogoogle/api/resource.proto"�A
Campaign@
resource_name (	B)�A�A#
!googleads.googleapis.com/Campaign
id; (B�AH�
name: (	H�l
primary_statusQ (2O.google.ads.googleads.v14.enums.CampaignPrimaryStatusEnum.CampaignPrimaryStatusB�A�
primary_status_reasonsR (2[.google.ads.googleads.v14.enums.CampaignPrimaryStatusReasonEnum.CampaignPrimaryStatusReasonB�AQ
status (2A.google.ads.googleads.v14.enums.CampaignStatusEnum.CampaignStatusl
serving_status (2O.google.ads.googleads.v14.enums.CampaignServingStatusEnum.CampaignServingStatusB�A�
bidding_strategy_system_statusN (2[.google.ads.googleads.v14.enums.BiddingStrategySystemStatusEnum.BiddingStrategySystemStatusB�A�
ad_serving_optimization_status (2[.google.ads.googleads.v14.enums.AdServingOptimizationStatusEnum.AdServingOptimizationStatusx
advertising_channel_type	 (2Q.google.ads.googleads.v14.enums.AdvertisingChannelTypeEnum.AdvertisingChannelTypeB�A�
advertising_channel_sub_type
 (2W.google.ads.googleads.v14.enums.AdvertisingChannelSubTypeEnum.AdvertisingChannelSubTypeB�A"
tracking_url_template< (	H�O
url_custom_parameters (20.google.ads.googleads.v14.common.CustomParametert
 local_services_campaign_settingsK (2J.google.ads.googleads.v14.resources.Campaign.LocalServicesCampaignSettingse
travel_campaign_settingsU (2C.google.ads.googleads.v14.resources.Campaign.TravelCampaignSettingsZ
real_time_bidding_setting\' (27.google.ads.googleads.v14.common.RealTimeBiddingSettingV
network_settings (2<.google.ads.googleads.v14.resources.Campaign.NetworkSettingsY
hotel_setting  (2=.google.ads.googleads.v14.resources.Campaign.HotelSettingInfoB�Ah
dynamic_search_ads_setting! (2D.google.ads.googleads.v14.resources.Campaign.DynamicSearchAdsSettingV
shopping_setting$ (2<.google.ads.googleads.v14.resources.Campaign.ShoppingSettingL
targeting_setting+ (21.google.ads.googleads.v14.common.TargetingSetting`
audience_settingI (2<.google.ads.googleads.v14.resources.Campaign.AudienceSettingB�AH�b
geo_target_type_setting/ (2A.google.ads.googleads.v14.resources.Campaign.GeoTargetTypeSettinga
local_campaign_setting2 (2A.google.ads.googleads.v14.resources.Campaign.LocalCampaignSetting]
app_campaign_setting3 (2?.google.ads.googleads.v14.resources.Campaign.AppCampaignSetting>
labels= (	B.�A�A(
&googleads.googleapis.com/CampaignLabelo
experiment_type (2Q.google.ads.googleads.v14.enums.CampaignExperimentTypeEnum.CampaignExperimentTypeB�AE
base_campaign8 (	B)�A�A#
!googleads.googleapis.com/CampaignH�J
campaign_budget> (	B,�A)
\'googleads.googleapis.com/CampaignBudgetH�o
bidding_strategy_type (2K.google.ads.googleads.v14.enums.BiddingStrategyTypeEnum.BiddingStrategyTypeB�A_
accessible_bidding_strategyG (	B:�A�A4
2googleads.googleapis.com/AccessibleBiddingStrategy

start_date? (	H�H
campaign_groupL (	B+�A(
&googleads.googleapis.com/CampaignGroupH�
end_date@ (	H	�
final_url_suffixA (	H
�J
frequency_caps( (22.google.ads.googleads.v14.common.FrequencyCapEntry~
video_brand_safety_suitability* (2Q.google.ads.googleads.v14.enums.BrandSafetySuitabilityEnum.BrandSafetySuitabilityB�AP
vanity_pharma, (29.google.ads.googleads.v14.resources.Campaign.VanityPharmab
selective_optimization- (2B.google.ads.googleads.v14.resources.Campaign.SelectiveOptimizationg
optimization_goal_setting6 (2D.google.ads.googleads.v14.resources.Campaign.OptimizationGoalSetting[
tracking_setting. (2<.google.ads.googleads.v14.resources.Campaign.TrackingSettingB�AQ
payment_mode4 (2;.google.ads.googleads.v14.enums.PaymentModeEnum.PaymentMode$
optimization_scoreB (B�AH�l
!excluded_parent_asset_field_typesE (2A.google.ads.googleads.v14.enums.AssetFieldTypeEnum.AssetFieldTypef
excluded_parent_asset_set_typesP (2=.google.ads.googleads.v14.enums.AssetSetTypeEnum.AssetSetType"
url_expansion_opt_outH (H�h
performance_max_upgradeM (2B.google.ads.googleads.v14.resources.Campaign.PerformanceMaxUpgradeB�AP
hotel_property_asset_setS (	B)�A�A#
!googleads.googleapis.com/AssetSetH�[
listing_typeV (2;.google.ads.googleads.v14.enums.ListingTypeEnum.ListingTypeB�AH�I
bidding_strategyC (	B-�A*
(googleads.googleapis.com/BiddingStrategyH A

commission1 (2+.google.ads.googleads.v14.common.CommissionH @

manual_cpaJ (2*.google.ads.googleads.v14.common.ManualCpaH @

manual_cpc (2*.google.ads.googleads.v14.common.ManualCpcH @

manual_cpm (2*.google.ads.googleads.v14.common.ManualCpmH E

manual_cpv% (2*.google.ads.googleads.v14.common.ManualCpvB�AH T
maximize_conversions (24.google.ads.googleads.v14.common.MaximizeConversionsH ]
maximize_conversion_value (28.google.ads.googleads.v14.common.MaximizeConversionValueH @

target_cpa (2*.google.ads.googleads.v14.common.TargetCpaH Y
target_impression_share0 (26.google.ads.googleads.v14.common.TargetImpressionShareH B
target_roas (2+.google.ads.googleads.v14.common.TargetRoasH D
target_spend (2,.google.ads.googleads.v14.common.TargetSpendH B
percent_cpc" (2+.google.ads.googleads.v14.common.PercentCpcH @

target_cpm) (2*.google.ads.googleads.v14.common.TargetCpmH �
PerformanceMaxUpgradeK
performance_max_campaign (	B)�A�A#
!googleads.googleapis.com/CampaignG
pre_upgrade_campaign (	B)�A�A#
!googleads.googleapis.com/Campaignp
status (2[.google.ads.googleads.v14.enums.PerformanceMaxUpgradeStatusEnum.PerformanceMaxUpgradeStatusB�A�
NetworkSettings!
target_google_search (H �"
target_search_network (H�#
target_content_network (H�*
target_partner_search_network (H�B
_target_google_searchB
_target_search_networkB
_target_content_networkB 
_target_partner_search_networkI
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
ShoppingSetting
merchant_id (B�AH �
sales_country (	H�

feed_label
 (	
campaign_priority (H�
enable_local (H�"
use_vehicle_inventory	 (B�AB
_merchant_idB
_sales_countryB
_campaign_priorityB
_enable_localB
TrackingSetting
tracking_url (	B�AH �B
_tracking_url�
GeoTargetTypeSettingq
positive_geo_target_type (2O.google.ads.googleads.v14.enums.PositiveGeoTargetTypeEnum.PositiveGeoTargetTypeq
negative_geo_target_type (2O.google.ads.googleads.v14.enums.NegativeGeoTargetTypeEnum.NegativeGeoTargetType
LocalCampaignSettingg
location_source_type (2I.google.ads.googleads.v14.enums.LocationSourceTypeEnum.LocationSourceType�
AppCampaignSetting�
bidding_strategy_goal_type (2i.google.ads.googleads.v14.enums.AppCampaignBiddingStrategyGoalTypeEnum.AppCampaignBiddingStrategyGoalType
app_id (	B�AH �c
	app_store (2K.google.ads.googleads.v14.enums.AppCampaignAppStoreEnum.AppCampaignAppStoreB�AB	
_app_id�
VanityPharma�
vanity_pharma_display_url_mode (2Y.google.ads.googleads.v14.enums.VanityPharmaDisplayUrlModeEnum.VanityPharmaDisplayUrlModea
vanity_pharma_text (2E.google.ads.googleads.v14.enums.VanityPharmaTextEnum.VanityPharmaTextc
SelectiveOptimizationJ
conversion_actions (	B.�A+
)googleads.googleapis.com/ConversionAction�
OptimizationGoalSettingn
optimization_goal_types (2M.google.ads.googleads.v14.enums.OptimizationGoalTypeEnum.OptimizationGoalTypeR
AudienceSetting&
use_audience_grouped (B�AH �B
_use_audience_groupedp
LocalServicesCampaignSettingsO
category_bids (28.google.ads.googleads.v14.resources.Campaign.CategoryBidu
CategoryBid
category_id (	H �"
manual_cpa_bid_micros (H�B
_category_idB
_manual_cpa_bid_microsS
TravelCampaignSettings#
travel_account_id (B�AH �B
_travel_account_id:W�AT
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
&com.google.ads.googleads.v14.resourcesBCampaignProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v14/resources;resources�GAA�"Google.Ads.GoogleAds.V14.Resources�"Google\\Ads\\GoogleAds\\V14\\Resources�&Google::Ads::GoogleAds::V14::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

