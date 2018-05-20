        <div id="search-bar">
            <form action="check-room.php">
                <input id="first-date-picker" type="text">
                <input id="second-date-picker" type="text">
                <select>
                    <option value="classic">Classique</option>
                    <option value="confort">Confort</option>
                    <option value="deluxe">Deluxe</option>
                    <option value="suite">Suite</option>
                </select>
                <div id="select-invite">
                    <span id="who-invite">Qui participe au séjour &#8595;</span>
                    <div id="dropdown-invite">
                        <div class="adulte-invite">
                            <span>Adulte (+12 ans)</span>
                            <select>
                                <option value="1" selected>1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                        <div class="child-invite">
                            <span>Enfant</span>
                            <select>
                                <option value="1" selected>0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                        <button id="check-invite" class="button-visual" data-hover="JE VALIDE" data-active="JE VALIDE">
                            <span>VALIDER</span>
                        </button>
                    </div>
                </div>
                <button id="check-number-invite" class="button-visual" data-hover="JE RÉSERVE" data-active="JE RÉSERVE">
                    <span>RÉSERVER</span>
                </button>
            </form>
    </div>