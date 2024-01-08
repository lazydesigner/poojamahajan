<form action="<?= get_url() ?>search">
                <div class="form-group">
                    <select name="category" id="category" aria-label="category">
                        <option value="call-girls">Call Girls</option>
                        <option value="escorts">Escorts</option>
                    </select>
                    <!-- Search -->
                    <div class="search-city" aria-label="search-city">
                            <input type="text" autocomplete="off" name="city" class="serach-city-input" style="text-transform: capitalize;" value="<?php if(isset($city)){echo $city;} ?>" id="serach-city-input" placeholder="Select City">
                            <div class="list-of-cities" id="list-of-cities">
                                <ul style="border: 0;" id="list-of-cities-id">
                                    
                                </ul>
                            </div>
                    </div>
                    <!-- Search -->
                    <select name="locality" id="area-locality" aria-label="locality">
                        <option value="">All Location</option>
                    </select>
                    <select name="gender" id="gender" aria-label="gender">
                        <option value="">All Gender</option>
                        <option value="female">Female</option>
                        <!-- <option value="male">Male</option>
                        <option value="transsexual">Transsexual</option>
                        <option value="lesbians">Lesbians</option>
                        <option value="gay-escort">Gay Escorts</option> -->
                    </select>
                </div>
                <div class="form-group" >
                    <select name="age" id="age-group"  aria-label="age-group">
                        <option value="">All Age Groups</option>
                        <option value="18-22">18 - 22 years</option>
                        <option value="23-26">23 - 26 years</option>
                        <option value="27-30">27 - 30 years</option>
                        <option value="35">35+ years</option>
                    </select>
                    <select name="short" id="short"  aria-label="short-by">
                        <option value="">Short By</option>
                        <option value="new-first">New First</option>
                        <option value="old-first">Old First</option>
                        <option value="most-viewed">Most Viewed</option>
                    </select>
                    <button>Submit</button>
                </div>
            </form>