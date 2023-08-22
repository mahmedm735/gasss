<!DOCTYPE html>
<html>

<head>
    <title>مبيعات الغاز</title>
    <link rel="stylesheet" href="fontawesome-free-6.4.0-web/css/all.min.css">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="home.css">
</head>

<body>
    <div class="nb">
        <i class="fa-solid fa-gas-pump" style="color: #043f03;"></i>
        <p>مبيعات الغاز</p>

  
    </div>
    <form action="">

    <div class="revise">

        <div style="direction: rtl;">
            <div class="second">
                <label for="dropdown1" style="display: flex; direction: rtl;   font-size: 20px; font-weight: bold;">اختار
                    المحافظة</label>


                <select id="dropdown1" name="city" onchange="showDropdown2()">
                    <option value="0">المحافظة</option>
                    <option value="1">القاهرة</option>
                    <option value="2">الجيزة</option>
                    <option value="3">الأسكندرية</option>
                    <option value="4">الدقهلية</option>
                    <option value="5">الشرقية</option>
                    <option value="6">المنوفية</option>
                    <option value="7">القليوبية</option>
                    <option value="8">البحيرة</option>
                    <option value="9">الغربية</option>
                    <option value="10">بور سعيد</option>
                    <option value="11">دمياط</option>
                    <option value="12">الإسماعلية</option>
                    <option value="13">السويس</option>
                    <option value="14">كفر الشيخ</option>
                    <option value="15">الفيوم</option>
                    <option value="16">بني سويف</option>
                    <option value="17">مطروح</option>
                    <option value="18">شمال سيناء</option>
                    <option value="19">جنوب سيناء</option>
                    <option value="20">المنيا</option>
                    <option value="21">أسيوط</option>
                    <option value="22">سوهاج</option>
                    <option value="23">قنا</option>
                    <option value="24">البحر الأحمر</option>
                    <option value="25">الأقصر</option>
                    <option value="26">أسوان</option>
                    <option value="27">الواحات</option>
                    <option value="28">الوادي الجديد</option>

                </select>


                <div id="dropdown2Container" style="display: none; ">
                    <label for="dropdown2"
                        style="display: flex; direction: rtl; font-size: 20px; font-weight: bold;">اختار
                        المحطة</label>


                    <select name="stationName" id="dropdown2">
                        <option value="0">المحطة</option>
                        <option value="1">ألماظة </option>
                        <option value="2">الكابلات</option>
                        <option value="3">التجمع الخامس </option>
                        <option value="4">جاردينيا </option>
                        <option value="5">الفردوس </option>
                        <option value="6">الرحاب</option>
                        <option value="7">محور المشير</option>
                        <option value="8">جسر السويس</option>
                        <option value="9">زهراء مدينة نصر</option>
                        <option value="10">حديقة بدر</option>
                        <option value="11">المطار</option>
                        <option value="12">الجبل الأحمر</option>
                        <option value="13">الشروق</option>
                        <option value="14">شبرا </option>
                        <option value="15">الاستاد</option>
                        <option value="16">المعادي/اللاسلكى</option>
                        <option value="17">الواحة</option>
                        <option value="18">وادي حوف</option>
                        <option value="19">النزهة الجديدة</option>
                        <option value="20">عين شمس </option>
                        <option value="21">اسو سافوي</option>
                        <option value="22">النهضة</option>
                        <option value="23">اسو القطامية</option>
                        <option value="24">الحلمية </option>
                        <option value="25">بدر الصناعية</option>
                        <option value="26">موبيل عين شمس</option>
                        <option value="27">الخليج</option>
                        <option value="28">المعصرة - كورنيش النيل</option>
                        <option value="29">جراج مجلس الوزراء </option>
                        <option value="30">مدينة نصر</option>
                        <option value="31">شبرد</option>
                        <option value="32">رمسيس </option>
                        <option value="33">المرج </option>
                        <option value="34">المطرية</option>
                        <option value="35">جراج شركة اتوبيس القاهرة</option>
                        <option value="36">السواح</option>
                        <option value="37">البساتين </option>
                        <option value="38">المقطم</option>
                        <option value="39">بدر الروبيكي</option>
                        <option value="40">التبين</option>
                        <option value="41">الخلفاوى</option>
                        <option value="42">رشدى - القاهرة</option>

                    </select>

                </div>
                <div id="dropdown2Container1" style="display: none;">

                    <label for="dropdown20"
                        style="display: flex; direction: rtl;  font-size: 20px; font-weight: bold;">اختار
                        المحطة</label>

                    <select name="stationName" id="dropdown22">
                        <option value="0">المحطة</option>
                        <option value="1">الشيخ زايد </option>
                        <option value="2">الدولفين </option>
                        <option value="3">مصدق </option>
                        <option value="4">حدائق اكتوبر </option>
                        <option value="5">الياسمين</option>
                        <option value="6">سفنكس</option>
                        <option value="7">الوراق - أمبابة</option>
                        <option value="8">أبو رواش</option>
                        <option value="9">الهرم </option>
                        <option value="10">العمرانية </option>
                        <option value="11">فيصل</option>
                        <option value="12">بوابة رسوم الصحراوي </option>
                        <option value="13">النجدة 6 اكتوبر </option>
                        <option value="14">البدرشين الجديدة</option>
                        <option value="15">المتانيا</option>
                        <option value="16">الدقى - المتحف</option>
                        <option value="17">كرداسه</option>
                        <option value="18">البراجيل الجديدة</option>
                        <option value="19">البراجيل القديمة</option>
                        <option value="20">الحوامدية</option>
                        <option value="21">أوسيم - كساب والصعيدى</option>
                        <option value="22">الودي</option>
                        <option value="23">أوتوستراد الصف</option>
                        <option value="24">مساكن ابو بكر الصديق</option>
                        <option value="25">طريق عزبة السلام</option>
                        <option value="26">وراق العرب</option>
                    </select>

                </div>
                <div id="dropdown2Container2" style="display: none;">

                    <label for="dropdown2"
                        style="display: flex; direction: rtl;  font-size: 20px; font-weight: bold;">اختار
                        المحطة</label>

                    <select name="stationName" id="dropdown2">
                        <option value="0">المحطة</option>
                        <option value="1">ابو تلات</option>
                        <option value="2">غيط العنب</option>
                        <option value="3">رشدى - الاسكندرية</option>
                        <option value="4"> العجمي</option>
                        <option value="5">جميلة بو حريد </option>
                        <option value="6">القبارى</option>
                        <option value="7">السيوف</option>
                        <option value="8">المكس</option>
                        <option value="9">ترعة المحمودية</option>
                        <option value="10">الطابية</option>
                        <option value="11">ام زغـــيو</option>
                        <option value="12">سموحة </option>
                        <option value="13">سيدى بشر </option>
                        <option value="14">سيدى بشر اتوبيسات</option>
                        <option value="15">العجمى - اتوبيسات </option>
                        <option value="16">محرم بك - أتوبيسات </option>
                        <option value="17">كينج مريوط</option>


                    </select>

                </div>
                <div id="dropdown2Container3" style="display: none;">

                    <label for="dropdown2"
                        style="display: flex; direction: rtl; font-size: 20px; font-weight: bold;">اختار
                        المحطة</label>

                    <select name="stationName" id="dropdown2">
                        <option value="0">المحطة</option>
                        <option value="1">المنصورة/سندوب</option>
                        <option value="2"> المنصورة/النخلة</option>
                        <option value="3"> المنصورة/الدراسات</option>
                        <option value="4"> الطويلة</option>
                        <option value="5"> ميت غمر </option>
                        <option value="6">شربين القديمة</option>
                        <option value="7">اجا</option>
                        <option value="8">العلاوية</option>
                        <option value="9">المنصورة/الثلاجة</option>
                    </select>

                </div>
                <div id="dropdown2Container4" style="display: none;">

                    <label for="dropdown2"
                        style="display: flex; direction: rtl; font-size: 20px; font-weight: bold;">اختار
                        المحطة</label>

                    <select name="stationName" id="dropdown2">
                        <option value="0">المحطة</option>
                        <option value="1">الزقازيق/المرور</option>
                        <option value="2">العاشر من رمضان </option>
                        <option value="3">العاشر A1</option>
                        <option value="4">الزاهد</option>
                        <option value="5"> الزقازيق/الجلاء</option>
                        <option value="6">الزقازيق/النقراشى</option>
                        <option value="7">أكراش</option>
                        <option value="8">جهينة القبليه </option>
                        <option value="9">فاقوس السكة </option>
                        <option value="10">منيا القمح الجديدة</option>
                        <option value="11">أشكر</option>
                        <option value="12">الزقازيق/الشيمى</option>
                        <option value="13">صبيح</option>
                        <option value="14">كفر صقر</option>
                        <option value="15">عزبة مختار</option>
                        <option value="16">الصالحية الجديدة</option>
                        <option value="17">ههيا الجديدة </option>
                        <option value="18">الحلمية/الشرقية</option>
                        <option value="19">القرين</option>
                    </select>
                </div>
                <div id="dropdown2Container5" style="display: none;">

                    <label for="dropdown2"
                        style="display: flex; direction: rtl; font-size: 20px; font-weight: bold;">اختار
                        المحطة</label>

                    <select name="stationName" id="dropdown2">
                        <option value="0">المحطة</option>
                        <option value="1">السادات الجامعة</option>
                        <option value="2">شبين الكوم</option>
                        <option value="3">قويسنا/المستشفى العام</option>
                        <option value="4">الباجور</option>
                        <option value="5">الشهداء القديمة</option>
                        <option value="6">الشهداء الجديدة</option>
                        <option value="7">سرس الليان/صابر </option>
                        <option value="8">قويسنا الزراعة الألية</option>
                        <option value="9">شبين الكوم/ التقوى</option>
                        <option value="10">تلا أبو قورة</option>
                        <option value="11">أشمون/ حمزة كشك</option>
                        <option value="12">منوف</option>
                        <option value="13">النور الحديثة</option>
                        <option value="14">قويسنا/مزروع</option>
                        <option value="15">سبك الضحاك</option>
                        <option value="16">طليا</option>
                        <option value="17">تلا المستودع</option>
                        <option value="18">ميت بره</option>
                        <option value="19">سرس الليان/شرشر</option>
                        <option value="20">السادات الجديدة</option>
                        <option value="21">شما</option>
                        <option value="22">زاوية جراوان</option>
                    </select>
                </div>

                <div id="dropdown2Container6" style="display: none;">

                    <label for="dropdown2"
                        style="display: flex; direction: rtl; font-size: 20px; font-weight: bold;">اختار
                        المحطة</label>

                    <select name="stationName" id="dropdown2">
                        <option value="0">المحطة</option>
                        <option value="1">الخانكة </option>
                        <option value="2">العبور/المنطقة الصناعية</option>
                        <option value="3">بنها</option>
                        <option value="4">كفر الجزار</option>
                        <option value="5">قليوب</option>
                        <option value="6">كفر شكر</option>
                        <option value="7">طوخ</option>
                        <option value="8">النادى الرياضى بنها</option>
                        <option value="9">كفر شبين</option>
                        <option value="10">كفر بطا</option>
                    </select>
                </div>
                <div id="dropdown2Container7" style="display: none;">

                    <label for="dropdown2"
                        style="display: flex; direction: rtl; font-size: 20px; font-weight: bold;">اختار
                        المحطة</label>

                    <select name="stationName" id="dropdown2">
                        <option value="0">المحطة</option>
                        <option value="1">دمنهور  اللمسى</option>
                        <option value="2">دمنهور  الموقف</option>
                        <option value="3">بريم كوم حمادة</option>
                        <option value="4">الدلنجات</option>
                        <option value="5">النوبارية /ك 79</option>
                        <option value="6">رشيد الدولي</option>
                        <option value="7">كفر الدوار</option>
                        <option value="8">صفط خالد</option>
                        <option value="9">خربتا</option>
                        <option value="10">النوبارية/النجار</option>
                        <option value="11">ابوالمطامير - المتحدون</option>
                        <option value="12">ايتاى البارود شرق</option>
                        <option value="13"> العطف / المحمودية</option>
                        <option value="14">الرحمانيه</option>
                        <option value="15">ايتاي البارود غرب</option>
                        <option value="16">نقل كفر الدوار</option>
                        <option value="17">محور الليثى</option>
                    </select>
                </div>
                <div id="dropdown2Container8" style="display: none;">

                    <label for="dropdown2"
                        style="display: flex; direction: rtl; font-size: 20px; font-weight: bold;">اختار
                        المحطة</label>

                    <select name="stationName" id="dropdown2">
                        <option value="0">المحطة</option>
                        <option value="1">طنطا/سناء المندوة</option>
                        <option value="2">سمنود</option>
                        <option value="3">م زفتى</option>
                        <option value="4">الزهراء - المحلة</option>
                    </select>
                </div>
                <div id="dropdown2Container9" style="display: none;">

                    <label for="dropdown2"
                        style="display: flex; direction: rtl; font-size: 20px; font-weight: bold;">اختار
                        المحطة</label>

                    <select name="stationName" id="dropdown2">
                        <option value="0">المحطة</option>
                        <option value="1">الضواحى </option>
                        <option value="2">الزهور </option>
                        <option value="3">قبضايا </option>
                        <option value="4">المروة </option>
                        <option value="5">النصر</option>
                        <option value="6">بورفؤاد</option>
                        <option value="7">أبو القمصان </option>
                        <option value="8">الكابتن</option>
                    </select>
                </div>
                <div id="dropdown2Container10" style="display: none;">

                    <label for="dropdown2"
                        style="display: flex; direction: rtl; font-size: 20px; font-weight: bold;">اختار
                        المحطة</label>

                    <select name="stationName" id="dropdown2">
                        <option value="0">المحطة</option>
                        <option value="1">شطا </option>
                        <option value="2">النشار</option>
                        <option value="3">دمياط الجديدة</option>
                        <option value="4">كفر سعد</option>
                    </select>
                </div>
                <div id="dropdown2Container11" style="display: none;">

                    <label for="dropdown2"
                        style="display: flex; direction: rtl; font-size: 20px; font-weight: bold;">اختار
                        المحطة</label>

                    <select name="stationName" id="dropdown2">
                        <option value="0">المحطة</option>
                        <option value="1">وطنية عز الدين </option>
                        <option value="2">شبين الكوم/الاسماعيلية</option>
                        <option value="3">الشهداء</option>
                        <option value="4">عز الدين طايع</option>
                        <option value="5">القنطره غرب الجديدة</option>
                    </select>
                </div>

    
                <div id="dropdown2Container12" style="display: none;">

                    <label for="dropdown2"
                        style="display: flex; direction: rtl; font-size: 20px; font-weight: bold;">اختار
                        المحطة</label>

                    <select name="stationName" id="dropdown2">
                        <option value="0">المحطة</option>
                        <option value="1">السويس/الثورة</option>
                        <option value="2">السويس/العاشر  </option>
                        <option value="3">الجناين</option>
                        <option value="4">صلاح نسيم</option>
                        <option value="5">الادبية</option>
                        <option value="6"> السلام/محمد بخيت</option>
                    </select>
                </div>
                <div id="dropdown2Container13" style="display: none;">

                    <label for="dropdown2"
                        style="display: flex; direction: rtl; font-size: 20px; font-weight: bold;">اختار
                        المحطة</label>

                    <select name="stationName" id="dropdown2">
                        <option value="0">المحطة</option>
                        <option value="1">بيلا </option>
       
                    </select>
                </div>


                <div id="dropdown2Container14" style="display: none;">

                    <label for="dropdown2"
                        style="display: flex; direction: rtl; font-size: 20px; font-weight: bold;">اختار
                        المحطة</label>

                    <select name="stationName" id="dropdown2">
                        <option value="0">المحطة</option>
                        <option value="1">  الفيوم/الموقف</option>
                        <option value="2">  الفيوم/السليين</option>
                        <option value="3">ابشواى</option>
       
                    </select>
                </div>
    
                <div id="dropdown2Container15" style="display: none;">

                    <label for="dropdown2"
                        style="display: flex; direction: rtl; font-size: 20px; font-weight: bold;">اختار
                        المحطة</label>

                    <select name="stationName" id="dropdown2">
                        <option value="0">المحطة</option>
                        <option value="1">بنى سويف </option>
                        <option value="2">بنى سويف الجديدة</option>
                        <option value="3">سمسطا</option>
                        <option value="4">بوش</option>
                        <option value="5">بنى سويف الجراج </option>
                        <option value="6">الفشن القديمة</option>
                        <option value="7">الفشن الجديدة</option>
                        <option value="8">ببا</option>
                        <option value="9">زهراء بياض العرب</option>
                        <option value="10">الشنطور</option>
                        <option value="11">الواسطى</option>
                    </select>
                </div>
                <div id="dropdown2Container16" style="display: none;">

                    <label for="dropdown2"
                        style="display: flex; direction: rtl; font-size: 20px; font-weight: bold;">اختار
                        المحطة</label>

                    <select name="stationName" id="dropdown2">
                        <option value="0">المحطة</option>
                    
       
                    </select>
                </div>

                <div id="dropdown2Container17" style="display: none;">

                    <label for="dropdown2"
                        style="display: flex; direction: rtl; font-size: 20px; font-weight: bold;">اختار
                        المحطة</label>

                    <select name="stationName" id="dropdown2">
                        <option value="0">المحطة</option>
                        <option value="1">العريش/الدائرى</option>
                        <option value="2">العريش/النافورة</option>
       
                    </select>
                </div>
                <div id="dropdown2Container18" style="display: none;">

                    <label for="dropdown2"
                        style="display: flex; direction: rtl; font-size: 20px; font-weight: bold;">اختار
                        المحطة</label>

                    <select name="stationName" id="dropdown2">
                        <option value="0">المحطة</option>
                        <option value="1">شرم الشيخ وطنية</option>
                        <option value="2">شرم الشيخ موبيل</option>
                        <option value="3">شرم الشيخ التعاون</option>
       
                    </select>
                </div>
                <div id="dropdown2Container19" style="display: none;">

                    <label for="dropdown2"
                        style="display: flex; direction: rtl; font-size: 20px; font-weight: bold;">اختار
                        المحطة</label>

                    <select name="stationName" id="dropdown2">
                        <option value="0">المحطة</option>
                        <option value="1">المنيا/شلبى</option>
                        <option value="2">ملوى </option>
                        <option value="3">الأشمونين</option>
                        <option value="4">بنى أحمد الغربيه</option>
                        <option value="5">المنيا الجديدة الحي الخامس</option>
                        <option value="6">ماقوسة</option>
       
                    </select>
                </div>
                <div id="dropdown2Container20" style="display: none;">

                    <label for="dropdown2"
                        style="display: flex; direction: rtl; font-size: 20px; font-weight: bold;">اختار
                        المحطة</label>

                    <select name="stationName" id="dropdown2">
                        <option value="0">المحطة</option>
                        <option value="1">تعاون ابوتيج</option>
                        <option value="2">دشلوط البلد</option>
                        <option value="3">تعاون ابنوب </option>
       
                    </select>
                </div>
                <div id="dropdown2Container21" style="display: none;">

                    <label for="dropdown2"
                        style="display: flex; direction: rtl; font-size: 20px; font-weight: bold;">اختار
                        المحطة</label>

                    <select name="stationName" id="dropdown2">
                        <option value="0">المحطة</option>
                        <option value="1">كمين الروافع </option>
                        <option value="2">التعاون جرجا </option>
                        <option value="3">البلينا</option>
                        <option value="4">اخميم ابوبكر</option>
                        <option value="5">طما السلاموني</option>
                        <option value="6">نجع الكشكى</option>
                        <option value="7">تل الزوكى</option>
                        <option value="8">اخميم النيل</option>
                        <option value="9">طما الجديدة</option>
                        <option value="10">شندويل</option>
       
                    </select>
                </div>
                <div id="dropdown2Container22" style="display: none;">

                    <label for="dropdown2"
                        style="display: flex; direction: rtl; font-size: 20px; font-weight: bold;">اختار
                        المحطة</label>

                    <select name="stationName" id="dropdown2">
                        <option value="0">المحطة</option>
                        <option value="1">ابو تشت</option>
                        <option value="2">قنا/جاب الله</option>
                        <option value="3">مستودع قنا</option>
                        <option value="4">قنا موقف المحافظه </option>
                        <option value="5">الخوالد</option>
                        <option value="6">الكوم الاحمر</option>
       
                    </select>
                </div>
                <div id="dropdown2Container23" style="display: none;">

                    <label for="dropdown2"
                        style="display: flex; direction: rtl; font-size: 20px; font-weight: bold;">اختار
                        المحطة</label>

                    <select name="stationName" id="dropdown2">
                        <option value="0">المحطة</option>
                        <option value="1">النجدة الغردقة </option>
                        <option value="2">الغردقة القديمة</option>
                        <option value="3">غارب القديمة</option>
                        <option value="4">شيراتون الغردقة</option>
                        <option value="5">غارب الجديده</option>
       
                    </select>
                </div>
                <div id="dropdown2Container24" style="display: none;">

                    <label for="dropdown2"
                        style="display: flex; direction: rtl; font-size: 20px; font-weight: bold;">اختار
                        المحطة</label>

                    <select name="stationName" id="dropdown2">
                        <option value="0">المحطة</option>
                        <option value="1">الجولى فيل</option>
                        <option value="2">إيزيس</option>
                        <option value="3">الزناقطة</option>
                        <option value="4">الحبيل/البركة</option>
       
                    </select>
                </div>
                <div id="dropdown2Container25" style="display: none;">

                    <label for="dropdown2"
                        style="display: flex; direction: rtl; font-size: 20px; font-weight: bold;">اختار
                        المحطة</label>

                    <select name="stationName" id="dropdown2">
                        <option value="0">المحطة</option>
                        <option value="1">أسوان المطار</option>
                        <option value="2">اسوان الجديدة</option>
                        <option value="3">اسوان اطلس</option>
                    
                    </select>
                </div>
                <div id="dropdown2Container26" style="display: none;">

                    <label for="dropdown2"
                        style="display: flex; direction: rtl; font-size: 20px; font-weight: bold;">اختار
                        المحطة</label>

                    <select name="stationName" id="dropdown2">
                        <option value="0">المحطة</option>
                    
       
                    </select>
                </div>
                <div id="dropdown2Container27" style="display: none; ">

                    <label for="dropdown2"
                        >اختار
                        المحطة</label>

                    <select name="stationName" id="dropdown2">
                        <option value="0">المحطة</option>
                    
       
                    </select>
                </div>

            </div>
        </div>

    </div>

    <div class="midd">
        <div class="all">
            <label for="date">التاريخ</label>
            <input name="date" id="dateInput" type="date">
        

            <label for="gas-sales">مبيعات الغاز</label>
            <input name="number" id="gas-sales" type="number">
            <label for="mtr"> متر مكعب</label>
            <label for="dropdown1" style="display: flex; direction: rtl;   font-size: 20px; font-weight: bold;">
                اعطال</label>


            <select name="disability" id="dis">
                <option value="0">اختار</option>
                <option value="1">يوجد</option>
                <option value="2">لا يوجد</option>

            </select>

        </div>


       
    </div>
<br>
    <div class="ss">
        <label for="textInput">الملاحظات</label>
        <textarea name="notes" type="text" id="textInput"></textarea>
    </div>
    <div class="button">
        <button name="submit" type="submit" class="btn btn-primary">  حفط البيانات</button>
    </div>

    <script>
        function showDropdown2() {
            var dropdown1 = document.getElementById("dropdown1");
            var dropdown2Container = document.getElementById("dropdown2Container");

            if (dropdown1.value == "1") {
                dropdown2Container.style.display = "block";
            } else {
                dropdown2Container.style.display = "none";
            }

            if (dropdown1.value == "2") {
                dropdown2Container1.style.display = "block";
            } else {
                dropdown2Container1.style.display = "none";
            }
            if (dropdown1.value == "3") {
                dropdown2Container2.style.display = "block";
            } else {
                dropdown2Container2.style.display = "none";
            }
            if (dropdown1.value == "4") {
                dropdown2Container3.style.display = "block";
            } else {
                dropdown2Container3.style.display = "none";
            }
            if (dropdown1.value == "5") {
                dropdown2Container4.style.display = "block";
            } else {
                dropdown2Container4.style.display = "none";
            }
            if (dropdown1.value == "6") {
                dropdown2Container5.style.display = "block";
            } else {
                dropdown2Container5.style.display = "none";
            }
            if (dropdown1.value == "7") {
                dropdown2Container6.style.display = "block";
            } else {
                dropdown2Container6.style.display = "none";
            }
            if (dropdown1.value == "8") {
                dropdown2Container7.style.display = "block";
            } else {
                dropdown2Container7.style.display = "none";
            }
            if (dropdown1.value == "9") {
                dropdown2Container8.style.display = "block";
            } else {
                dropdown2Container8.style.display = "none";
            }
            if (dropdown1.value == "10") {
                dropdown2Container9.style.display = "block";
            } else {
                dropdown2Container9.style.display = "none";
            }
            if (dropdown1.value == "11") {
                dropdown2Container10.style.display = "block";
            } else {
                dropdown2Container10.style.display = "none";
            }
            if (dropdown1.value == "12") {
                dropdown2Container11.style.display = "block";
            } else {
                dropdown2Container11.style.display = "none";
            }
            if (dropdown1.value == "13") {
                dropdown2Container12.style.display = "block";
            } else {
                dropdown2Container12.style.display = "none";
            }
            if (dropdown1.value == "14") {
                dropdown2Container13.style.display = "block";
            } else {
                dropdown2Container13.style.display = "none";
            }
            if (dropdown1.value == "15") {
                dropdown2Container14.style.display = "block";
            } else {
                dropdown2Container14.style.display = "none";
            }
            if (dropdown1.value == "16") {
                dropdown2Container15.style.display = "block";
            } else {
                dropdown2Container15.style.display = "none";
            }
            if (dropdown1.value == "17") {
                dropdown2Container16.style.display = "block";
            } else {
                dropdown2Container16.style.display = "none";
            }
            if (dropdown1.value == "18") {
                dropdown2Container17.style.display = "block";
            } else {
                dropdown2Container17.style.display = "none";
            }
            if (dropdown1.value == "19") {
                dropdown2Container18.style.display = "block";
            } else {
                dropdown2Container18.style.display = "none";
            }
            if (dropdown1.value == "20") {
                dropdown2Container19.style.display = "block";
            } else {
                dropdown2Container19.style.display = "none";
            }
            if (dropdown1.value == "21") {
                dropdown2Container20.style.display = "block";
            } else {
                dropdown2Container20.style.display = "none";
            }
            if (dropdown1.value == "22") {
                dropdown2Container21.style.display = "block";
            } else {
                dropdown2Container21.style.display = "none";
            }
            if (dropdown1.value == "23") {
                dropdown2Container22.style.display = "block";
            } else {
                dropdown2Container22.style.display = "none";
            }
            if (dropdown1.value == "24") {
                dropdown2Container23.style.display = "block";
            } else {
                dropdown2Container23.style.display = "none";
            }
            if (dropdown1.value == "25") {
                dropdown2Container24.style.display = "block";
            } else {
                dropdown2Container24.style.display = "none";
            }
            if (dropdown1.value == "26") {
                dropdown2Container25.style.display = "block";
            } else {
                dropdown2Container25.style.display = "none";
            }
            if (dropdown1.value == "27") {
                dropdown2Container26.style.display = "block";
            } else {
                dropdown2Container26.style.display = "none";
            }
            if (dropdown1.value == "28") {
                dropdown2Container27.style.display = "block";
            } else {
                dropdown2Container27.style.display = "none";
            }
        }
    </script>
</form>
</body>
<?php
$conn = mysqli_connect("localhost", "root", "", "gas");

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
  $city = mysqli_real_escape_string($conn, $_POST['city']);
  $stationName = mysqli_real_escape_string($conn, $_POST['stationName']);
  $date= mysqli_real_escape_string($conn, $_POST['date']);
  $number = mysqli_real_escape_string($conn, $_POST['number']);
  $disability = mysqli_real_escape_string($conn, $_POST['disability']);
  $notes = mysqli_real_escape_string($conn, $_POST['notes']);
  

  $sql = "INSERT INTO data (city, stationName, date,  number, disability, notes) 
          VALUES ('$city', '$stationName', '$date', '$number', '$disability', '$notes')";
  if (mysqli_query($conn, $sql)) {
    echo "تم حفظ البيانات";
  } else {
    echo "Error inserting record: " . mysqli_error($conn);
  }
}
?>

</html>