<template>
    <div class="panel-title">
      <h5>{{ this.count }} Online</h5>
    </div>
</template>

<script>
    export default {
        // props: ['user'],

        data() {
            return {
                count: 0
            }
        },
        mounted() {
            this.listen();
        },
        methods: {
            listen() {
                Echo.join('chat')
                    .here(users => this.count = users.length)
                    .joining(user => this.count++)
                    .leaving(user => this.count--);
            }
        }
    }
</script>
