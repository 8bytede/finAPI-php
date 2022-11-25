# # ErrorDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**message** | **string** | Error message | [optional]
**code** | [**ErrorCode**](ErrorCode.md) | &lt;strong&gt;Type:&lt;/strong&gt; ErrorCode&lt;br/&gt; Error code. See the documentation of the individual services for details about what values may be returned. |
**type** | [**ErrorType**](ErrorType.md) | &lt;strong&gt;Type:&lt;/strong&gt; ErrorType&lt;br/&gt; Error type. BUSINESS errors depict error messages in the language of the bank (or the preferred language) for the user, e.g. from a bank server. TECHNICAL errors are meant to be read by developers and depict internal errors. |
**multi_step_authentication** | [**\OpenAPI\Client\Model\ErrorDetailsMultiStepAuthentication**](ErrorDetailsMultiStepAuthentication.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
