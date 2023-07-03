@extends('layout')

@section('nav')
    <x-nav />
@endsection

@section('content')
    <div class="container">
        <div class="title my-6">
            <h1 class="text-3xl">Add a new property</h1>
        </div>
        <div>
            <form action="{{ route('property.create') }}" method="post">
                @csrf
                <div class="block">
                    <label for="prop-name">Name: </label>
                    <input type="text" id="prop-name" class="form-input" name="name" required />
                </div>
                <div class="block">
                    <label for="prop-transaction">Transaction: </label>
                    <select type="text" id="prop-transaction" class="form-input" name="transaction" required>
                        <option value="purchase">Purchase</option>
                        <option value="rent">Rent</option>
                    </select>
                </div>
                <fieldset class="m-4">
                    <legend class="text-2xl font-bold">Address</legend>
                    <div class="block">
                        <label for="prop-address-1">Address 1</label>
                        <input type="text" id="prop-address-1" class="form-input" name="address1" required />
                    </div>
                    <div class="block">
                        <label for="prop-address-2">Address 2</label>
                        <input type="text" id="prop-address-2" class="form-input" name="address2" />
                    </div>
                    <div class="block">
                        <label for="prop-address-3">Address 3</label>
                        <input type="text" id="prop-address-3" class="form-input" name="address3" />
                    </div>
                    <div class="block">
                        <label for="prop-postcode">Postcode</label>
                        <input type="text" id="prop-postcode" class="form-input" name="postcode" placeholder="Postcode"
                            required />
                    </div>
                    <div class="block">
                        <label for="prop-city">City</label>
                        <input type="text" id="prop-city" class="form-input" name="city" placeholder="City" />
                    </div>
                </fieldset>
                <fieldset class="m-4">
                    <legend class="text-2xl font-bold">Characteristics</legend>
                    <div class="block">
                        <label for="prop-plot-size">Plot size</label>
                        <input type="number" id="prop-plot-size" class="form-input" name="plot_size" min="0" />
                    </div>
                    <div class="block">
                        <label for="prop-size">Property size</label>
                        <input type="number" id="prop-size" class="form-input" name="prop_size" min="0" />
                    </div>
                    <div class="block">
                        <label for="prop-num-floors"># Floors</label>
                        <input type="number" id="prop-num-floors" class="form-input" name="num_floor" min="0" />
                    </div>
                    <div class="block">
                        <label for="prop-num-rooms"># Rooms</label>
                        <input type="number" id="prop-num-rooms" class="form-input" name="num_rooms" min="0" />
                    </div>
                    <div class="block">
                        <label for="prop-has-garden">Has Garden</label>
                        <input type="checkbox" id="prop-has-garden" class="form-input" value="false" name="has_garden" />
                    </div>
                    <div class="block">
                        <label for="prop-has-garage">Has Garage</label>
                        <input type="checkbox" id="prop-has-garage" class="form-input" value="false" name="has_garage" />
                    </div>
                    <div class="block">
                        <label for="prop-price">Price</label>
                        <input type="number" id="prop-price" class="form-input" name="price" min="0"
                            required />
                    </div>
                    <div class="block">
                        <label for="prop-link">Link</label>
                        <input type="text" id="prop-link" class="form-input" name="ad_link" />
                    </div>
                </fieldset>
                <fieldset class="m-4">
                    <legend class="text-2xl font-bold">Contact info</legend>
                    <div class="block">
                        <label for="contact-firstname">Firstname</label>
                        <input type="text" id="contact-firstname" class="form-input" name="contac_firstname" />
                    </div>
                    <div class="block">
                        <label for="contact-lastname">lastname</label>
                        <input type="text" id="contact-lastname" class="form-input" name="contact_lastname" />
                    </div>
                    <div class="block">
                        <label for="contact-phone">Phone</label>
                        <input type="text" id="contact-phone" class="form-input" name="contact_phone" />
                    </div>
                    <div class="block">
                        <label for="contact-email">Email</label>
                        <input type="email" id="contact-email" class="form-input" name="contact_email" />
                    </div>
                </fieldset>
                <button class="btn">Save</button>
            </form>
        </div>
    </div>
@endsection
