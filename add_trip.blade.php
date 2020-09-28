
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<script src="{{ asset('js/app.js') }}" defer></script>
</head>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tripModal">
  Launch demo modal
</button>
    <div class="modal" id="tripModal" tabindex="-1" role="dialog" aria-labelledby="tripLongTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tripTitle">नवीन ट्रीप</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="control-label">गाडी नंबर :</label>
                        <select id="selectDriver" class="form-control">
                            <option>MH070852</option>
                            <option>MH090542</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">पाहिजे असलेली वस्तू :</label>
                        <select name="selectProd" class="form-control">
                            <option>चिरा</option>
                            <option>वाळू</option>
                        </select>
                        <label class="control-label">प्रमाण :</label>
                        <input type="number" id="quantity" class="form-control" placeholder="Enter the quantity">
                        <select name="selectUnit" class="form-control">
                            <option>नग</option>
                            <option>ब्रास</option>
                        </select>
                        <label class="control-label">दर :</label>
                        <input type="number" id="rate" class="form-control" placeholder="Enter the rate"
                            oninput="calculateAmount()">
                    </div>

                    <div class="form-group">
                        <label for="deliveryPlace" class="control-label">डिलिव्हरी करण्याचे ठिकाण :</label>
                        <select name="selectDistrict" class="form-control">
                            <option value="none" selected disabled hidden>
                                जिल्हा
                            </option>
                            <option>रत्नागिरी</option>
                            <option>कोल्हापूर</option>
                        </select>
                        <select name="selectTaluka" class="form-control">
                            <option value="none" selected disabled hidden>
                                तालुका
                            </option>
                            <option>राजापूर</option>
                            <option>दापोली</option>
                        </select>
                        <select name="selectVillage" class="form-control">
                            <option value="none" selected disabled hidden>
                                गाव
                            </option>
                            <option>रायपाटण</option>
                            <option>पाचल</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">ग्राहकाचे नाव :</label>
                        <select name="selectCust" class="form-control">
                            <option>Pooja</option>
                            <option>Bablu Dada</option>
                        </select>
                        <div> ग्राहक उपलब्ध नाही.<a href="customer_basic_info.html">ग्राहक एड करण्यासाठी इथे क्लिक
                                करा.</a></div>
                    </div>
                    <div class="form-group">
                        <label for="selectDriver" class="control-label">ड्रायव्हरचे नाव :</label>
                        <select id="selectDriver" class="form-control">
                            <option>सुरेश</option>
                            <option>रमेश</option>
                        </select>
                        <div> ड्रायव्हर उपलब्ध नाही.<a href="customer_basic_info.html">ड्रायव्हर एड करण्यासाठी इथे क्लिक
                                करा.</a></div>
                    </div>

                    <div class="form-group">
                        <label for="selectCarrier" class="control-label">हमालांचे नाव :</label>
                        <select id="selectCarrier" class="form-control">
                            <option>सुरेश</option>
                            <option>रमेश</option>
                        </select>
                        <div>हमाल उपलब्ध नाही.<a href="customer_basic_info.html">हमाल एड करण्यासाठी इथे क्लिक करा.</a>
                        </div>
                        <select id="selectOtherCarrier" class="form-control">
                            <option>सुरेश</option>
                            <option>रमेश</option>
                        </select>
                        <div>हमाल उपलब्ध नाही.<a href="customer_basic_info.html">हमाल एड करण्यासाठी इथे क्लिक करा.</a>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">ठरावाची एकूण रक्कम :</label>
                        <label class="control-label" id="totalamount">
                    </div>
                    <div class="form-group">
                        <div class='input-group date' id='datetimepicker1'>
                            <input type='text' class="form-control" />
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <i class="fas fa-plus-circle"></i>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
 