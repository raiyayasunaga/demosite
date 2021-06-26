<template>
    <div class="container">
        <button class="stopbutton btn btn-outline-primary" @click="Stop">止める</button>
        <button class="moveslowbutton btn btn-outline-primary" @click="Stop">減速</button>
        <button class="movebutton btn btn-outline-primary" @click="moveToDown()">加速</button>
            <!-- 運搬止まらずむしろ早くなっている -->
                <div class="row mt-3">スクロール速度
                    <select class="form-control mb-3" v-model="speedNumber" @change="select">
                        <option value="">選択してください</option>
                        <option value="早い">早い</option>
                        <option selected value="普通" >普通</option>
                        <option value="遅い">遅い</option>
                    </select>
                </div>
            <div @click="moveToDown()">   
            </div>   
    </div>
</template>

<script>

    export default {

        data: () => {
            // ここ入らないのかも
            return {
                test: 0,
                speedNumber: '',
            }
        },
        methods: {
            // $fixedは使わない？
            
            select(value) {
                if (value.target.value == "早い") {
                        let speed = 1; //時間あたりに移動するpx量
                        let interval = 50; //移動する間隔
                    this.test = setInterval(function() {
                        let scrollTop = document.body.scrollTop;
                        let scroll = scrollTop + speed;
                        window.scrollBy(0, scroll)
                    },interval);
                    }
                else if (value.target.value == "遅い") {
                        let speed = 1; //時間あたりに移動するpx量
                        let interval = 200; //移動する間隔
                    this.test = setInterval(function() {
                        let scrollTop = document.body.scrollTop;
                        let scroll = scrollTop + speed;
                        window.scrollBy(0, scroll)
                    },interval);
                    }
                else {
                        let speed = 1; //時間あたりに移動するpx量
                        let interval = 120; //移動する間隔
                    this.test = setInterval(function() {
                        let scrollTop = document.body.scrollTop;
                        let scroll = scrollTop + speed;
                        window.scrollBy(0, scroll)
                    },interval);
                    }
            },
            moveToDown() {
                    let speed = 1;
                    let interval = 120;
                this.sample = setInterval(function() {
                    let scrollTop = document.body.scrollTop;
                    let scroll = scrollTop + speed;
                window.scrollBy(0, scroll)
                },interval);
            },
            Stop() {
                clearInterval(this.test),
                clearInterval(this.sample);
            }
        },
        
        
    }

      

</script>