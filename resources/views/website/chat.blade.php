<!-- Fonts -->
<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
<style>
   #contacts-list {
       overflow-y: auto;
       width: 300px;
       height: 500px;
       background-color: #ECECEC;
       border-radius:0.75rem;
       border:1px solid #D4D4D4;
       font-family: 'Inter';

   }
   #contacts-list h2{
       padding:20px;
   }
   .contact-container {

       height: 50px;
       display: flex;
       padding: 5px 0;
       cursor: pointer;
       border-bottom:1px solid #D4D4D4;
   }

   .contact-container:hover {
       background-color: #007DF9;
       color:#fff;
       font-weight: bold;
   }

   .contact-name {
       padding: 0 20px;
       display: flex;
       flex-direction: column;
       justify-content: space-around;
   }
</style>


<div style="display: flex; justify-content: center; align-items: center;">
   <!-- container element in which TalkJS will display a chat UI -->
   <div id="talkjs-container" style="width: 40%; margin: 30px; height: 500px;">
       <i>Loading chat...</i>
   </div>
   <div id="contacts-list">
       <h2>Contacts</h2>
   </div>

</div>


<script type="text/javascript">
   const otherUsers = @json($users);
   const contactsWrapper = document.getElementById('contacts-list');
   // Traversing through users to show the list
   for (let user of otherUsers) {
       const id = user.id;
       const username = user.name;

       const usernameDiv = document.createElement('div');
       usernameDiv.classList.add('contact-name');
       usernameDiv.innerText = username;

       const contactContainerDiv = document.createElement('div');
       contactContainerDiv.classList.add('contact-container');

       contactContainerDiv.appendChild(usernameDiv);

       contactsWrapper.appendChild(contactContainerDiv);
   }
</script>
