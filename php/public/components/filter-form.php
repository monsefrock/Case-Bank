<form dir="ltr" class="grid gap-4" id="case-filter">
    <div>
        <label for="difficulty" class="block mb-2">مستوى القضية</label>
        <div class="flex justify-between space-x-2">
            <label class="flex items-center space-x-1">
                <input class="group1" type="radio" name="difficulty" value="option3">
                <span>متقدم</span>
            </label>
            <label class="flex items-center space-x-1">
                <input class="group1" type="radio" name="difficulty" value="option2">
                <span>متوسط</span>
            </label>
            <label class="flex items-center space-x-1">
                <input class="group1" type="radio" name="difficulty" value="option1">
                <span>عادي</span>
            </label>
            <label class="flex items-center space-x-1">
                <input class="group1" type="radio" name="difficulty" value="disabled" checked>
                <span>-</span>
            </label>
        </div>
    </div>
    <div>
        <label for="sub" class="block mb-2">الموضوع الفرعي للقضية</label>
        <select id="sub" name="sub" class="w-full border rounded p-2 group1">
            <option value="disabled">-</option>
            <?php

            use App\Models\CaseModel;

            $result = CaseModel::getSubCat();
            foreach ($result as $mainCat) {
                echo '<option value="'.$mainCat['case_s_cat'].'">'.$mainCat['case_s_cat'].'</option>';
            }
            ?>
        </select>
    </div>
    <div>
        <label for="cat" class="block mb-2">موضوع القضية</label>
        <select id="cat" name="cat" class="w-full border rounded p-2 group1">
            <option value="disabled">-</option>
            <?php
            $result = CaseModel::getMainCat();
            foreach ($result as $mainCat) {
                echo '<option value="'.$mainCat['case_m_cat'].'">'.$mainCat['case_m_cat'].'</option>';
            }
            ?>
        </select>
    </div>
    <div>
        <label for="type" class="block mb-2">نوع القضية</label>
        <select id="type" name="type" class="w-full border rounded p-2">
            <?php
            $result = CaseModel::getTypeCat();
            foreach ($result as $mainCat) {
                echo '<option value="'.$mainCat['case_type'].'">'.$mainCat['case_type'].'</option>';
            }
            ?>
        </select>
    </div>
    <div class="flex justify-center space-x-4 col-span-full">
        <button type="reset" class="bg-blue-600 text-white px-4 py-2 rounded">إعادة تعيين المرشح</button>
        <a id="getCase" class="bg-orange-600 text-white px-4 py-2 rounded cursor-pointer">ابحث عن القضية</a>
    </div>
</form>
