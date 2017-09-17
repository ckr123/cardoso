export default {
    name: 'modal',
    props: {
        modalOpen: {
            type: Boolean,
            default: false
        },
    },

    methods: {
        closeModal() {
            this.$emit('modalClosed');
        }
    }
}
