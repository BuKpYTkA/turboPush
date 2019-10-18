<template>
    <div class="text-center">
        <v-overlay :value="isLoading">
            <v-progress-circular indeterminate size="64"></v-progress-circular>
        </v-overlay>
    </div>
</template>
<script>
    export default {
        props: {
            source: String,
        },
        computed: {
            isLoading() {
                return this.$store.state.isLoading;
            }
        },
        data: () => ({
            drawer: null,
        }),
    }
</script>