# # BankInterface

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**banking_interface** | [**BankingInterface**](BankingInterface.md) | &lt;strong&gt;Type:&lt;/strong&gt; BankingInterface&lt;br/&gt; Banking interface. Possible values:&lt;br&gt;&lt;br&gt;&amp;bull; &lt;code&gt;WEB_SCRAPER&lt;/code&gt; - means that finAPI will parse data from the bank&#39;s online banking website.&lt;br&gt;&amp;bull; &lt;code&gt;FINTS_SERVER&lt;/code&gt; - means that finAPI will download data via the bank&#39;s FinTS server.&lt;br&gt;&amp;bull; &lt;code&gt;XS2A&lt;/code&gt; - means that finAPI will download data via the bank&#39;s XS2A interface.&lt;br&gt; |
**tpp_authentication_group** | [**\OpenAPI\Client\Model\BankInterfaceTppAuthenticationGroup**](BankInterfaceTppAuthenticationGroup.md) |  | [optional]
**login_credentials** | [**\OpenAPI\Client\Model\BankInterfaceLoginField[]**](BankInterfaceLoginField.md) | &lt;strong&gt;Type:&lt;/strong&gt; BankInterfaceLoginField&lt;br/&gt; Login fields for this interface (in the order that we suggest to show them to the user) |
**properties** | [**BankInterfaceProperty[]**](BankInterfaceProperty.md) |  |
**login_hint** | **string** | Login hint. Contains a German message for the user that explains what kind of credentials are expected.&lt;br/&gt;&lt;br/&gt;Please note that it is essential to always show the login hint to the user if there is one, as the credentials that finAPI requires for the bank might be different to the credentials that the user knows from his online banking.&lt;br/&gt;&lt;br/&gt;Also note that the contents of this field should always be interpreted as HTML, as the text might contain HTML tags for highlighted words, paragraphs, etc. | [optional]
**health** | **int** | The health status of this interface. This is a value between 0 and 100, depicting the percentage of successful communication attempts with the bank via this interface during the last couple of bank connection imports or updates (across the entire finAPI system). &lt;br/&gt;&lt;br/&gt;Note:&lt;br/&gt;&amp;bull; &#39;Successful&#39; communication attempt means that there was no technical error trying to establish a communication with the bank. Non-technical errors (like incorrect credentials) are regarded successful communication attempts.&lt;br/&gt;&amp;bull; If an interface is not supported (see fields &#39;isAisSupported&#39;/&#39;isPisSupported&#39;), the health will always be 0. |
**last_communication_attempt** | **\DateTime** | &lt;strong&gt;Format:&lt;/strong&gt; &#39;YYYY-MM-DD&#39;T&#39;HH:MM:SS.SSSXXX&#39; (RFC 3339, section 5.6)&lt;br/&gt;Time of the last communication attempt with this interface during an import, update or connect interface (across the entire finAPI system). | [optional]
**last_successful_communication** | **\DateTime** | &lt;strong&gt;Format:&lt;/strong&gt; &#39;YYYY-MM-DD&#39;T&#39;HH:MM:SS.SSSXXX&#39; (RFC 3339, section 5.6)&lt;br/&gt;Time of the last successful communication with this interface during an import, update or connect interface (across the entire finAPI system). | [optional]
**is_ais_supported** | **bool** | Whether this interface has the general capability to perform Account Information Services (AIS), i.e. if this interface can be used to download accounts, balances and transactions. |
**is_pis_supported** | **bool** | Whether this interface has the general capability to perform Payment Initiation Services (PIS). For more details, see the field &#39;paymentCapabilities&#39;. |
**payment_capabilities** | [**\OpenAPI\Client\Model\BankInterfacePaymentCapabilities**](BankInterfacePaymentCapabilities.md) |  |
**ais_account_types** | [**AccountType[]**](AccountType.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
