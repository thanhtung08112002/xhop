        <section class="form_contact">
          <div class="row">
            <div class="col">
              <div class="form_contact-title">
                <h2>Liên hệ</h2>
                <p>
                 Hãy liên hệ với chúng tôi 
                </p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <form action="" onsubmit="return validate()">
                <div class="form_group">
                  <label for="chosse">topic</label>
                  <select name="chosse" id="choose" >
                    <option value="">chosse</option>
                    <option value="sunscreen">sunscreen</option>
                    <option value="facewash">facewash</option>
                    <option value="lotion">lotion</option>
                  </select>
                  <span class="error"></span>
                </div>
                <div class="form_group form_group-detail">
                  <div class="form_group-name">
                    <label for="username">name</label>
                    <input type="text" name="username" placeholder="name" id="name" oninput="onin(this,1)"/>
                    <span class="error"></span>
                  </div>
                  <div class="form_group-email">
                    <label for="email">e-mail</label>
                    <input type="email" name="email" placeholder="email" id="email" oninput="onin(this,2)"/>
                    <span class="error"></span>
                  </div>
                </div>
                <div class="form_group">
                  <label for="message">message</label>
                  <textarea name="message" id="message" cols="30" rows="10" oninput="onin(this,3)"></textarea>
                  <span class="error"></span>
                </div>
                <div id="location"></div>
                <div class="btn">
                  <input type="submit" name="btn-submit" value="SEND" id="submit"/>
                  <input
                    type="button"
                    name="btn-location"
                    value="LOCATION-NOW"
                    onclick="getLocation(this)"
                  />
                </div>
              </form>
            </div>
          </div>
        </section>