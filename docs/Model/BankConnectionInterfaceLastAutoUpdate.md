# # BankConnectionInterfaceLastAutoUpdate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**result** | [**UpdateResultStatus**](UpdateResultStatus.md) | &lt;strong&gt;Type:&lt;/strong&gt; UpdateResultStatus&lt;br/&gt; Note that &#39;OK&#39; just means that finAPI could successfully connect and log in to the bank server. However, it does not necessarily mean that all accounts could be updated successfully. For the latter, please refer to the &#39;status&#39; field of the Account resource. |
**error_message** | **string** | In case the update result is not &lt;code&gt;OK&lt;/code&gt;, this field may contain an error message with details about why the update failed (it is not guaranteed that a message is available though). In case the update result is &lt;code&gt;OK&lt;/code&gt;, the field will always be null. | [optional]
**error_type** | [**ErrorType**](ErrorType.md) | &lt;strong&gt;Type:&lt;/strong&gt; ErrorType&lt;br/&gt; In case the update result is not &lt;code&gt;OK&lt;/code&gt;, this field contains the type of the error that occurred. BUSINESS means that the bank server responded with a non-technical error message for the user. TECHNICAL means that some internal error has occurred in finAPI or at the bank server. | [optional]
**timestamp** | **\DateTime** | &lt;strong&gt;Format:&lt;/strong&gt; &#39;YYYY-MM-DD&#39;T&#39;HH:MM:SS.SSSXXX&#39; (RFC 3339, section 5.6)&lt;br/&gt;Time of the update. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
