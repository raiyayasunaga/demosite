<template>
    <div class="container">
            <div class="row my-3">
                <div class="col-12">
                    <div class="mt-3">コード入力</div>
                    <select class="form-control mb-3" @change="onchange()" v-model="selected">
                        <option value="key_c">C</option>
                        <option value="key_c#">C#</option>
                        <option value="key_d">D</option>
                        <option value="key_d#">D#</option>
                        <option value="key_e">E</option>
                        <option value="key_f">F</option>
                        <option value="key_f#">F#</option>
                        <option value="key_g">G</option>
                        <option value="key_g#">G#</option>
                        <option value="key_a">A</option>
                        <option value="key_a#">A#</option>
                        <option value="key_b">B</option>
                    </select>
                    <div>画像表示</div>
                    <select class="form-control" @change="onImage()" v-model="show">
                        <option value="/img/C.png">C</option>
                        <option value="/img/Cm.png">Cm</option>
                        <option value="/img/Cdim.png">Cdim</option>
                    </select>
                </div>
            </div>   
            <div class="row m-3">
                <h3>よく使われるコード</h3>
            </div>
            <!-- ボタン -->
            <div class="row justify-content-center">
                <button 
                    v-for="cord in cords"
                    :key="cord" 
                    class="cord-button"
                    type="button" 
                    @click="onClick( cord )"
                >
                    {{ cord }}
                </button>
                <button
                    v-for="fixed of fixeds"  
                    :key="fixed"
                    class="cord-button"
                    type="button"
                    @click="onClick( fixed )"
                >
                    {{ fixed }}
                </button>
            </div>

            <div class="row my-5">
                <!-- ここでボタンが表示される -->
                <textarea  cols="170" rows="6" v-model="MyText" name="lyrics">
                </textarea>
            </div>
            <div>
                プレビュー
            </div>
            <div class="row p-5 m-5">
                <!-- textareaで入力したコード（ボタン）を{{MyText}}内で画像に変換させる -->
                <div id="view">
                    {{ MyText }}
                </div>
            </div>
    </div>
</template>



<script>

    export default {

        data: () => {
            // ここ入らないのかも
            return {
                cords: ['C', 'Cm', 'C6', 'C7', 'C7sus4', 'Cadd9', 'Caug', 'Cdim', 'CmM7', 'Cm7', 'Cm7b5', 'Csus4', 'CM7'],
                fixeds: ['/', 'N.C'],
                images:['C_png', 'Cm_png', 'C6_png'],
                Cordimage: ' ',
                MyText: ' ',
                selected: 'key_c',
                show: ' ',
            }
        },
        
        methods: {
            // $fixedは使わない？
            oneClick: function() {
                this.count++;
            },
            onClick($cord) {
                this.MyText = `${this.MyText} [${$cord}]`;

                
                // idビューエレメントを出して、appendをイメージタグを追加していく
                // 画像を配列にして上手くまとめて表示させる方法
            },
            
            onchange() {
                let groupCords = {
                    'key_c': ['C', 'Cm', 'Cdim', 'C6', 'C7', 'C7sus4', 'Cadd9', 'Caug', 'Cdim', 'CmM7', 'Cm7', 'Cm7b5', 'Csus4', 'CM7'],
                    'key_c#': ['C#', 'C#6', 'C#7', 'C#7sus4', 'C#add9', 'C#m', 'C#dim', 'C#mM7', 'C#m7', 'C#mb5', 'C#sus4', 'C#M7'],
                    'key_d': ['D', 'Dm', 'Ddim', 'D6', 'D7', 'D7sus4', 'Dadd9', 'Daug', 'DmM7', 'Dm7', 'Dm7b5', 'Dsus4', 'DM7'],
                    'key_d#': ['D#', 'Dm#', 'Ddim', 'D#6', 'D#7', 'D#7sus4', 'D#add9', 'D#aug', 'D#m7', 'D#m7b5', 'D#sus4', 'D#M7'],
                    'key_e': ['E', 'Em', 'Eb7', 'Edim', 'E6', 'E7', 'E7sus4', 'Eadd9', 'EmM7', 'Em7', 'Em7b5', 'Esus4', 'EM7' ],
                    'key_f': ['F', 'Fm7', 'Fdim', 'F6', 'F7', 'F7sus4', 'Fadd9', 'Fdim', 'FmM7', 'Fm7', 'Fm7b5', 'Fsus4', 'FM7'],
                    'key_f#': ['F#', 'F#m7', 'F#dim', 'F#6', 'F#7', 'F#7sus4', 'F#add9', 'F#aug', 'F#dim', 'F#mM7', 'F#m7', 'F#m7b5', 'F#sus4', 'F#M7'],
                    'key_g': ['G', 'Gm', 'Gdim', 'G7', 'G6', 'G7sus4', 'Gadd9', 'Gaug', 'GmM7', 'Gm7', 'Gm7b5', 'Gsus4', 'GM7'],
                    'key_g#': ['Gm', 'Gm#', 'G#dim', 'G#7', 'G#6', 'G#7sus4', 'G#add9', 'G#aug', 'G#mM7', 'G#m7', 'G#m7b5', 'G#sus4', 'G#M7'],
                    'key_a': ['A', 'Am', 'Aaug', 'Adim', 'A7', 'A6', 'A7sus4', 'Aadd9', 'Aaug', 'AmM7', 'Am7b5', 'Asus4', 'AM7'],
                    'key_a#': ['A#', 'A#m', 'A#aug', 'A#dim', 'A7', 'A6', 'A7sus4', 'Aadd9', 'Asug', 'AmM7', 'Am7', 'Am7b5', 'Asus4', 'AM7'],
                    'key_b': ['B', 'Bm', 'Bdim', 'Baug', 'B6', 'B7', 'B7sus4', 'Badd9', 'Baug', 'BmM7', 'Bm7', 'Bm7b5', 'Bsus4', 'BM7']
                };
                this.cords = groupCords[this.selected];
                
            },
            onImage() {
                let groupImages = {
                    'C': '/img/C.png',
                    'Cm': '/img/Cm.png',
                    'Cdim': '/img/Cdim.png'
                }
            },
            
        }
        
    }

</script>

