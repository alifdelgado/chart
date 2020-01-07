<script>
    import { renderChart } from 'chart.js';
    import { Line } from 'vue-chartjs';
    export default {
        extends: Line,
        data(){
            return {
                url: '/getProducts',
                years: [],
                labels: [],
                prices: [],
                data: ''
            }
        },
        mounted() {
            this.getProducts();
        },
        methods: {
            getProducts(){
                axios.get(this.url).then(response => {
                    this.data = response.data;
                    if(this.data){
                        this.data.forEach(element => {
                            this.years.push(element.year);
                            this.labels.push(element.name);
                            this.prices.push(element.price);
                        });

                        this.renderChart({
                            labels: this.years,
                            datasets: [
                                {
                                    label: 'Sales',
                                    backgroundColor: '#f87979',
                                    data: this.prices
                                }
                            ]
                        }, {responsive: true, maintainAspectRatio: false});
                    }
                });
            }
        }
    }
</script>
