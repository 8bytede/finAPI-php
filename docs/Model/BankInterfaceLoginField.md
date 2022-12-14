# # BankInterfaceLoginField

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**label** | **string** | Contains a German label for the input field that you should provide to the user. Also, these labels are used to identify login fields on the API-level, when you pass credentials to the service. |
**is_secret** | **bool** | Whether this field has to be treated as a secret. In this case your application should use a password input field instead of a cleartext field. |
**is_volatile** | **bool** | This field depicts whether the given credential is volatile. If a field is volatile, it means that the value for the field, which is provided by the user, is valid only for a single authentication and then gets invalidated on bank-side. If a login credential field is volatile, it is not possible to store it in finAPI, as stored credentials will never work for future authentications. |
**is_mandatory** | **bool** | Indicates whether this is a mandatory or optional login field. We recommend showing all login fields to the users (mandatory and optional). |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
