<?php
/**
 * Migration genrated using LaraAdmin
 * Help: http://laraadmin.com
 */

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Dwij\Laraadmin\Models\Module;

class CreateKarutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Module::generate("Karutes", 'karutes', 'time', 'fa-bus', [
            ["time", "予約日時", "Datetime", false, "", 0, 0, false],
            ["groupName", "団体名", "String", false, "", 0, 256, false],
            ["tourCompany", "業者", "Dropdown", false, "", 0, 0, false, "@tourcompanies"],
            ["front_name", "フロント名", "Dropdown", false, "", 0, 256, false, "@fronts"],
            ["bus_name", "バス会社", "Dropdown", false, "", 0, 256, false, "@buses"],
            ["bus_num", "バス台数", "Integer", false, "", 0, 11, false],
            ["options", "オプション", "Multiselect", false, "", 0, 0, false, ["\u98df\u4e8b\u4ee3\u30db\u30fc\u30eb","\u98f2\u7269\u4ee3\u30db\u30fc\u30eb","\u30a4\u30b9\u5e2d\u5e0c\u671b","\u5ea7\u6577\u5e0c\u671b","\u500b\u5ba4\u5e0c\u671b","\u8eca\u8ca9","\u98df\u3079\u6b69\u304d"]],
            ["paymentMethod", "支払い方法", "Dropdown", false, "", 0, 0, false, ["\u73fe\u91d1","\u8acb\u6c42\u66f8","\u30af\u30fc\u30dd\u30f3","\u524d\u632f\u8fbc","\u6255\u623b\u3057"]],
            ["contact", "手配方法", "Dropdown", false, "", 0, 0, false, ["FAX","\u96fb\u8a71","MAIL","\u6765\u5e97"]],
            ["contact_num", "手配", "String", false, "", 0, 256, false],
            ["hall_note", "ホール備考", "Textarea", false, "", 0, 0, false],
            ["pref", "県名", "Dropdown", false, "", 0, 0, false, "@prefectures"],
            ["uketsuke", "受付者", "Dropdown", false, "", 0, 0, false, "@employees"],
            ["nyuryoku", "入力者", "Dropdown", false, "", 0, 0, false, "@employees"],
            ["tantou", "担当者", "Dropdown", false, "", 0, 0, false, "@employees"],
            ["note", "営業備考", "Textarea", false, "", 0, 0, false],
        ]);
		
		/*
		Row Format:
		["field_name_db", "Label", "UI Type", "Unique", "Default_Value", "min_length", "max_length", "Required", "Pop_values"]
        Module::generate("Module_Name", "Table_Name", "view_column_name" "Fields_Array");
        
		Module::generate("Books", 'books', 'name', [
            ["address",     "Address",      "Address",  false, "",          0,  1000,   true],
            ["restricted",  "Restricted",   "Checkbox", false, false,       0,  0,      false],
            ["price",       "Price",        "Currency", false, 0.0,         0,  0,      true],
            ["date_release", "Date of Release", "Date", false, "date('Y-m-d')", 0, 0,   false],
            ["time_started", "Start Time",  "Datetime", false, "date('Y-m-d H:i:s')", 0, 0, false],
            ["weight",      "Weight",       "Decimal",  false, 0.0,         0,  20,     true],
            ["publisher",   "Publisher",    "Dropdown", false, "Marvel",    0,  0,      false, ["Bloomsbury","Marvel","Universal"]],
            ["publisher",   "Publisher",    "Dropdown", false, 3,           0,  0,      false, "@publishers"],
            ["email",       "Email",        "Email",    false, "",          0,  0,      false],
            ["file",        "File",         "File",     false, "",          0,  1,      false],
            ["files",       "Files",        "Files",    false, "",          0,  10,     false],
            ["weight",      "Weight",       "Float",    false, 0.0,         0,  20.00,  true],
            ["biography",   "Biography",    "HTML",     false, "<p>This is description</p>", 0, 0, true],
            ["profile_image", "Profile Image", "Image", false, "img_path.jpg", 0, 250,  false],
            ["pages",       "Pages",        "Integer",  false, 0,           0,  5000,   false],
            ["mobile",      "Mobile",       "Mobile",   false, "+91  8888888888", 0, 20,false],
            ["media_type",  "Media Type",   "Multiselect", false, ["Audiobook"], 0, 0,  false, ["Print","Audiobook","E-book"]],
            ["media_type",  "Media Type",   "Multiselect", false, [2,3],    0,  0,      false, "@media_types"],
            ["name",        "Name",         "Name",     false, "John Doe",  5,  250,    true],
            ["password",    "Password",     "Password", false, "",          6,  250,    true],
            ["status",      "Status",       "Radio",    false, "Published", 0,  0,      false, ["Draft","Published","Unpublished"]],
            ["author",      "Author",       "String",   false, "JRR Tolkien", 0, 250,   true],
            ["genre",       "Genre",        "Taginput", false, ["Fantacy","Adventure"], 0, 0, false],
            ["description", "Description",  "Textarea", false, "",          0,  1000,   false],
            ["short_intro", "Introduction", "TextField",false, "",          5,  250,    true],
            ["website",     "Website",      "URL",      false, "http://dwij.in", 0, 0,  false],
        ]);
		*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('karutes')) {
            Schema::drop('karutes');
        }
    }
}
