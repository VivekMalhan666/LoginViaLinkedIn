# LoginViaLinkedIn
1. Create your app in LinkedIn

Log in to the LinkedIn Developer portal, and click Create App.

You'll be asked to provide basic details about your app, including your:

    App name
    Company
    Privacy policy URL
    Business email
    App logo

You'll also need to select the products you'd like to add/integrate into your app. By default, you'll get the abilities to Share on LinkedIn and Sign In with LinkedIn. You can, however, also use the Marketing Developer Platform.

Finally, indicate that you agree to LinkedIn's legal terms, and click Create App.
Client ID and Client Secret

LinkedIn automatically generates a Client ID and Client Secret for your application; you can find these on the app's Auth screen under Application credentials. Make a note of these values, since you'll need to provide them to Auth0 at a later point.
OAuth 2.0 Settings

You will need to provide the appropriate Redirect URL for your app to LinkedIn. You can do this via the Auth screen under OAuth 2.0 Settings. Click the pencil icon, then click Add redirect URL. When prompted, provide the following:
Field 	Description
Redirect URLs 	https://YOUR_DOMAIN/login/callback
Find your Auth0 domain name for redirects

If your Auth0 domain name is not shown above and you are not using our custom domains feature, your domain name is your tenant name, plus .auth0.com. For example, if your tenant name were exampleco-enterprises, your Auth0 domain name would be exampleco-enterprises.auth0.com and your redirect URI would be https://exampleco-enterprises.auth0.com/login/callback.

If you are using custom domains, your redirect URI will have the following format: https://<YOUR CUSTOM DOMAIN>/login/callback.

Click Update to save your changes.
2. Create and enable a connection in Auth0

Set up the LinkedIn social connection in Auth0. Make sure you have the Client ID and Client Secret generated in Step 1.
3. Test the connection

You're ready to test your connection.
Access LinkedIn's API

Once a user successfully authenticates, LinkedIn will include an Access Token in the user profile it returns to Auth0. You can use this token to call LinkedIn's API.

To get the LinkedIn Access Token, you must retrieve the full user's profile using the Auth0 Management API and extract the Access Token from the response. For detailed steps, see Call an Identity Provider's API.

Using the token, you can call LinkedIn's API following LinkedIn's documentation.

Optional: Get a Refresh Token from LinkedIn to refresh your Access Token once it expires. To ensure your application is secure, pay close attention to the restrictions on using Refresh Tokens.
