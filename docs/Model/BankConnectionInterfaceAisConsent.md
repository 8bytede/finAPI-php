# # BankConnectionInterfaceAisConsent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | [**BankConsentStatus**](BankConsentStatus.md) | &lt;strong&gt;Type:&lt;/strong&gt; BankConsentStatus&lt;br/&gt; Status of the consent. If &lt;code&gt;PRESENT&lt;/code&gt;, it means that finAPI has a consent stored and can use it to connect to the bank. If &lt;code&gt;NOT_PRESENT&lt;/code&gt;, finAPI will need to acquire a consent when connecting to the bank, which may require login credentials (either passed by the client, or stored in finAPI), and/or user involvement. Note that even when a consent is &lt;code&gt;PRESENT&lt;/code&gt;, it may no longer be valid and finAPI will still have to acquire a new consent. |
**expires_at** | **\DateTime** | &lt;strong&gt;Format:&lt;/strong&gt; &#39;YYYY-MM-DD&#39;T&#39;HH:MM:SS.SSSXXX&#39; (RFC 3339, section 5.6)&lt;br/&gt;Expiration time of the consent. | [optional]
**supports_import_new_accounts** | **bool** | Whether this consent supports the download of accounts that weren&#39;t downloaded at the time when the consent was issued. If this field is false, then you will have to delete this consent before you can update the bank connection with &#39;importNewAccounts&#39; &#x3D; true (otherwise, the update will result in an error). Please note that the user will have to be involved in the process of issuing a new consent. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
