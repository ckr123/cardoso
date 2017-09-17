<template>
    <div class="modal fade" tabindex="-1" role="dialog" :id="id">
        <div class="modal-dialog" :class="'modal-'+size" role="document">
            <div class="modal-content">
                <div class="modal-body" v-if="!hideBody">
                    <slot name="body"></slot>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {

    name: 'modal',

    modal: null,

    props: {

        id: String,
        open: { type: Boolean, default: false },
        size: { Type: String, default: 'lg' },
        hideBody: { type: Boolean, default: false },

        // Modal specific props
        backdrop: { type: [Boolean, String], default: true },
        keyboard: { type: Boolean, default: true },
    },

    watch: {
        open(value) {
            if(value) {
                this.openModal();
            } else {
                this.closeModal();
            }
        }
    },

    methods: {

        init() {
            this.modal = $(this.$el)
                .on('hidden.bs.modal', (e) => {
                    this.$emit('close');
                })
                .modal({
                    backdrop: this.backdrop,
                    keyboard: this.keyboard,
                    show: this.open,
                });
        },

        openModal() {
            if(this.modal) {
                this.modal.modal('show');
            }
        },

        closeModal() {
            if(this.modal) {
                this.modal.modal('hide');
            }
        },

        submit() {
            this.$emit('submit');
        },

    },

    mounted() {
        this.$nextTick(() => {
            this.init();
            if (this.shouldOpen) {
                this.open();
            }
        });
    }

}
</script>
