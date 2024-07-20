/* 

This code is an event listener, which enables the execution of specified code when a designated event, such as a click 
or keypress, occurs on an HTML element, facilitating interactive and responsive web applications. In this case, 
when the button with the id "cancel-button" is clicked, this code triggers the Churnkey window to open and 
begins the process of trying to persuade the user from ending their subscription. 

*/





document.addEventListener('DOMContentLoaded', function () {
  var cancelButton = document.getElementById('cancel-button');
  
  cancelButton.addEventListener('click', function () {
    // Call window.churnkey.init() when cancel-button is clicked
    window.churnkey.init('show', {
      customerId: 'cus_QVBhnykr03RYfs', // Replace with your actual customer ID
      authHash: jsVar,
      appId: 'vupg9mh6t', // Replace with your actual app ID
      mode: 'test',
      provider: 'stripe',
      preview: true,
      record: false,
      report: false
    });
  });
});
