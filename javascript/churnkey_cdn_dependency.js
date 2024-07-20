/*

The following code will pull in the Churnkey client-side module and add it under the window.churnkey namespace so that 
you can later initialize the Churnkey Cancel Flow for your customers. Place it in the HTML <head> element. YOUR_APP_ID can be found in  Your Account.

*/

!function(){  
  if (!window.churnkey || !window.churnkey.created) {
    window.churnkey = { created: true };
    const a = document.createElement('script');
    a.src = 'https://assets.churnkey.co/js/app.js?appId=vupg9mh6t';
    a.async = true;
    const b = document.getElementsByTagName('script')[0];
    b.parentNode.insertBefore(a, b);
  }
}();
