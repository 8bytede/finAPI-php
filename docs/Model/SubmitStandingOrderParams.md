# # SubmitStandingOrderParams

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**standing_order_id** | **int** | Standing order identifier |
**banking_interface** | [**BankingInterface**](BankingInterface.md) | &lt;strong&gt;Type:&lt;/strong&gt; BankingInterface&lt;br/&gt; Banking interface. Possible values:&lt;br&gt;&lt;br&gt;&amp;bull; &lt;code&gt;FINTS_SERVER&lt;/code&gt; - means that finAPI will execute the standing order via the bank&#39;s FinTS interface.&lt;br&gt;&amp;bull; &lt;code&gt;WEB_SCRAPER&lt;/code&gt; - means that finAPI will parse data from the bank&#39;s online banking website.&lt;br&gt;&amp;bull; &lt;code&gt;XS2A&lt;/code&gt; - means that finAPI will execute the standing order via the bank&#39;s XS2A interface.&lt;br/&gt;To determine what interface(s) you can choose to submit a standing order, please refer to the field paymentCapabilities.sepaStandingOrder in BankInterface.&lt;br/&gt;For standalone standing orders in particular, we suggest to always use XS2A if supported, and only use FINTS_SERVER or WEB_SCRAPER as a fallback, because non-XS2A interfaces might require not just a single, but multiple authentications when submitting the standing order.&lt;br/&gt; |
**login_credentials** | [**\OpenAPI\Client\Model\LoginCredential[]**](LoginCredential.md) | &lt;strong&gt;Type:&lt;/strong&gt; LoginCredential&lt;br/&gt; Login credentials. May not be required when the credentials are stored in finAPI, or when the bank interface has no login credentials. | [optional]
**redirect_url** | **string** | Must only be passed when the used interface has the property REDIRECT_APPROACH. The user will be redirected to the given URL from the bank&#39;s website after completing the bank login and (possibly) the SCA. | [optional]
**multi_step_authentication** | [**\OpenAPI\Client\Model\ConnectInterfaceParamsMultiStepAuthentication**](ConnectInterfaceParamsMultiStepAuthentication.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
