<template>
    <div id="chat-messages-inner">
      <p v-for="message in messages" style="display: block;">
        <span class="msg-block">
          <strong>{{ message.user.name }}</strong> <span class="time">{{ message.created_at }}</span>
          <span class="msg">{{ message.message }}</span>
        </span>
      </p>
    </div>
</template>

<script>
  export default {
    props: ['messages']
  };
</script>
