# # StandingOrder

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Standing order identifier |
**account_id** | **int** | Identifier of the account to which this standing order relates. This field is only set if it was specified upon creation of the standing order. | [optional]
**iban** | **string** | IBAN of the account to which this standing order relates. This field is only set if it was specified upon creation of the standing order. | [optional]
**amount** | **float** | Amount of the standing order, as absolute value. |
**currency** | [**Currency**](Currency.md) | &lt;strong&gt;Type:&lt;/strong&gt; Currency&lt;br/&gt; The currency code of the &#39;amount&#39;, in the ISO 4217 Alpha 3 format. |
**start_date** | **\DateTime** | &lt;strong&gt;Format:&lt;/strong&gt; &#39;YYYY-MM-DD&#39;&lt;br/&gt;Start date of the standing order. |
**end_date** | **\DateTime** | &lt;strong&gt;Format:&lt;/strong&gt; &#39;YYYY-MM-DD&#39;&lt;br/&gt;Termination date of the standing order. If this field is not set, then the standing order has no termination date. | [optional]
**frequency** | [**StandingOrderFrequency**](StandingOrderFrequency.md) | &lt;strong&gt;Type:&lt;/strong&gt; StandingOrderFrequency&lt;br/&gt; The frequency of the standing order. |
**request_date** | **\DateTime** | &lt;strong&gt;Format:&lt;/strong&gt; &#39;YYYY-MM-DD&#39;T&#39;HH:MM:SS.SSSXXX&#39; (RFC 3339, section 5.6)&lt;br/&gt;Time of when finAPI submitted this standing order to the bank. | [optional]
**request_completion_date** | **\DateTime** | &lt;strong&gt;Format:&lt;/strong&gt; &#39;YYYY-MM-DD&#39;T&#39;HH:MM:SS.SSSXXX&#39; (RFC 3339, section 5.6)&lt;br/&gt;Time of when the submission of this standing order was finalized. Note: When the submission of a standing order is finalized, it does not necessarily mean that the bank accepted the standing order. Please refer to the standing order’s &#39;status&#39; for its final status. | [optional]
**status** | [**OrderInitiationStatus**](OrderInitiationStatus.md) | &lt;strong&gt;Type:&lt;/strong&gt; OrderInitiationStatus&lt;br/&gt; Current standing order status:&lt;br/&gt; &amp;bull; OPEN: means that this standing order has been created in finAPI, but not yet submitted to the bank.&lt;br/&gt; &amp;bull; PENDING: means that this standing order has been submitted to the bank,  but has not been confirmed yet.&lt;br/&gt; &amp;bull; SUCCESSFUL: means that this standing order has been successfully initiated.&lt;br/&gt; &amp;bull; NOT_SUCCESSFUL: means that this standing order could not be initiated successfully.&lt;br/&gt; &amp;bull; DISCARDED: means that this standing order was discarded, either because another standing order was requested for the same account before this standing order was initiated and the bank does not support this, or because the user has aborted the initiation (when using finAPI&#39;s Web Form). |
**bank_message** | **string** | The bank&#39;s response to the most recent request for this standing order. Note that this field may not always (or never) be set. Also, as long as the standing order has not reached its final status, this field can always change. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
