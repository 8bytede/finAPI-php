# # TppCredentialsParams

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tpp_authentication_group_id** | **int** | The TPP Authentication Group Id for which the credentials can be used |
**label** | **string** | Label to credentials. |
**tpp_client_id** | **string** | ID of the TPP accessing the ASPSP API, as provided by the ASPSP as the result of registration | [optional]
**tpp_client_secret** | **string** | Secret of the TPP accessing the ASPSP API, as provided by the ASPSP as the result of registration | [optional]
**tpp_api_key** | **string** | API Key provided by ASPSP as the result of registration | [optional]
**tpp_name** | **string** | TPP name | [optional]
**valid_from_date** | **\DateTime** | &lt;strong&gt;Format:&lt;/strong&gt; &#39;YYYY-MM-DD&#39;&lt;br/&gt;Credentials \&quot;valid from\&quot; date. Default is today&#39;s date | [optional]
**valid_until_date** | **\DateTime** | &lt;strong&gt;Format:&lt;/strong&gt; &#39;YYYY-MM-DD&#39;&lt;br/&gt;Credentials \&quot;valid until\&quot; date. Default is null which means \&quot;indefinite\&quot; (no limit) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
