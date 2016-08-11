<main id="app">

    <select v-model="customerName">
        <option selected value="1">Jan</option>
        <option value="2">Doe</option>
        <option value="3">Khan</option>
    </select>
    <br>
    <span>Selected: @{{ customerName }}</span>



    <h1>Create an Invoice</h1>

    <form v-on:submit.prevent>

        <fieldset>
            <label for="number">Invoice #</label>
            <input id="number" type="number" min="1" step="1" v-model="number">
        </fieldset>

        <fieldset>
            <label for="issued">Issued</label>
            <input id="issued" type="date" v-model="issued">
        </fieldset>

        <fieldset>
            <label for="due">Due</label>
            <input id="due" type="date" v-model="due">
        </fieldset>

        <fieldset>
            <label for="client">To</label>
            <input id="client" type="text" v-model="client">
        </fieldset>

        <label>Items</label>
        <div v-for="item in items">
            <fieldset style="position:relative;">
                <div style="display: inline-block;width:50%;">
                    <small>Description</small>
                    <input type="text" v-model="item.description">
                </div>
                <div style="display: inline-block;width:15%;">
                    <small>Hours/Units</small>
                    <input type="number" min="0" step="0.01" v-model="item.quantity">
                </div>
                <div style="display: inline-block;width:15%;">
                    <small>Rate</small>
                    <input type="number" min="0" step="0.01" v-model="item.price">
                </div>
                <div style="display: inline-block;width:15%;">
                    <small>Total</small>
                    <input value="@{{ (item.price * item.quantity).toFixed(2) }}" disabled>
                </div>
                <a href="#" @click="removeItem(item)" style="position:absolute;right:0;top:1.6em;font-size:1.1em">
                <i class="fa fa-trash" aria-hidden="true"></i>
                </a>
            </fieldset>
        </div>

        <button @click="addItem">Add Item</button>

        <hr>

        <fieldset>
            <small>Deposit</small>
            <input id="deposit" type="number" step="0.01" min="0" v-model="deposit" style="width:6rem;display:inline">
        </fieldset>

        <fieldset>
            <small>Subtotal</small>
            <input value="@{{ subtotal }}" style="width:6rem;display:inline" disabled>
        </fieldset>

        <fieldset>
            <small>Outstation Charges %</small>
            <input type="number" v-model="oc" value="5" min="0" max="99" step="1" style="width:4rem;display:inline">

            <input type="number" v-model="stoc" disabled style="width:5rem;display:inline" value="@{{ stoc }}">
        </fieldset>

        <fieldset>
            <small>Subtotal 2</small>
            <input type="number" v-model="subtotal2" disabled style="width:5rem;display:inline" value="@{{ subtotal2 }}">
        </fieldset>

        <fieldset>
            <small>HST %</small>
            <input type="number" v-model="hst" value="13" min="0" max="99" step="1" style="width:4rem;display:inline">

            <input type="number" v-model="tax" disabled style="width:5rem;display:inline" value="@{{ tax }}">
        </fieldset>

        <fieldset>
            <small>Total</small>
            <input type="text" v-model="total" disabled style="width:5rem;display:inline" value="@{{ total }}">
        </fieldset>




    </form>

</main>


