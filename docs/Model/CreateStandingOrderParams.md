# # CreateStandingOrderParams

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **int** | Identifier of the account that should be used for the standing order. If you want to do a standalone standing order (i.e. for an account that is not imported in finAPI) leave this field unset and instead use the field &#39;iban&#39;. | [optional]
**iban** | **string** | IBAN of the account that should be used for the standing order. Use this field only if you want to do a standalone standing order (i.e. for an account that is not imported in finAPI) otherwise, use the &#39;accountId&#39; field and leave this field unset. | [optional]
**counterpart_name** | **string** | Name of the counterpart. Note: Neither finAPI nor the involved bank servers are guaranteed to validate the counterpart name. Even if the name does not depict the actual registered account holder of the target account, the order might still be successful. |
**counterpart_iban** | **string** | IBAN of the counterpart&#39;s account. |
**amount** | **float** | The amount of the standing order. Must be a positive decimal number with at most two decimal places. |
**currency** | [**Currency**](Currency.md) | &lt;strong&gt;Type:&lt;/strong&gt; Currency&lt;br/&gt; The currency code of the &#39;amount&#39;. To be provided in the ISO 4217 Alpha 3 format. |
**purpose** | **string** | The purpose of the standing order. | [optional]
**sepa_purpose_code** | **string** | SEPA purpose code, according to ISO 20022, external codes set.&lt;br/&gt;Please note that the SEPA purpose code may be ignored by some banks. | [optional]
**end_to_end_id** | **string** | End-To-End ID of the standing order | [optional]
**start_date** | **\DateTime** | &lt;strong&gt;Format:&lt;/strong&gt; &#39;YYYY-MM-DD&#39;&lt;br/&gt;Start date of the standing order. Date must be in the future (at least tomorrow). |
**end_date** | **\DateTime** | &lt;strong&gt;Format:&lt;/strong&gt; &#39;YYYY-MM-DD&#39;&lt;br/&gt;Termination date of the standing order. If provided, it must be after the &#39;startDate&#39;. If not provided, then the standing order will have no termination. | [optional]
**frequency** | [**StandingOrderFrequency**](StandingOrderFrequency.md) | &lt;strong&gt;Type:&lt;/strong&gt; StandingOrderFrequency&lt;br/&gt; The frequency of the standing order |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
