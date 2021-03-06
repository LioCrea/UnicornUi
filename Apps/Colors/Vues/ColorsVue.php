<?php

/**
 * Class ColorsVue
 * This class was generated by Unicorn as view
 * @author gchanteloube
 */

class ColorsVue extends IVue {
    public function __toString() {
        $this->content = '
		    <div class="ui-wrapper">
                <div class="color-wrapper">
                    <h1> Colors sets </h1>
                    <div class="xs-line"></div>
                    <div class="colors-wrapper">
                        <div class="square light-blue-bg">
                            <p>#3498db</p>
                        </div>
                        <div class="square lagoon-bg">
                            <p>#16a085</p>
                        </div>
                        <div class="square sea-blue-bg">
                            <p>#2980b9</p>
                        </div>
                        <div class="square dark-blue-bg">
                            <p>#2c3e50</p>
                        </div>
                        <div class="square yellow-sun-bg">
                            <p>#e67e22</p>
                        </div>
                        <div class="square sunset-bg">
                            <p>#d35400</p>
                        </div>
                        <div class="square bloody-bg">
                            <p>#c0392b</p>
                        </div>
                        <div class="square industrial-bg">
                            <p>#7f8c8d</p>
                        </div>
                    </div>
                </div>
            </div>
        ';

        return $this->generate();
    }
}

?>
