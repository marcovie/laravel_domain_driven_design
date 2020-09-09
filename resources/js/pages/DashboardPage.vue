<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Example Component Structure</div>

                    <div class="card-body">
                        <ChartUIComponent :chartdata="chartdata"></ChartUIComponent>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import ChartUIComponent from '../components/ui/ChartUIComponent.vue';

    export default {
        props: ['chartdata'],
        mixins: [],
        components: {
            ChartUIComponent
        },
        mounted() {

        }
    }
</script>
