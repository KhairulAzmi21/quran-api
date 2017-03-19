<?php

use App\Surah;
use Illuminate\Database\Seeder;

class GenerateSurahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data =
        array(
            array('id' => "1", 'number_of_ayas' => "7", 'start' => "0", 'name' => "الفاتحة", 'translated_name' => "Al-Faatiha", 'ename' => "The Opening", 'type' => "Meccan", 'order' => "5", 'rukus' => "1"),
            array('id' => "2", 'number_of_ayas' => "286", 'start' => "7", 'name' => "البقرة", 'translated_name' => "Al-Baqara", 'ename' => "The Cow", 'type' => "Medinan", 'order' => "87", 'rukus' => "40"),
            array('id' => "3", 'number_of_ayas' => "200", 'start' => "293", 'name' => "آل عمران", 'translated_name' => "Aal-i-Imraan", 'ename' => "The Family of Imraan", 'type' => "Medinan", 'order' => "89", 'rukus' => "20"),
            array('id' => "4", 'number_of_ayas' => "176", 'start' => "493", 'name' => "النساء", 'translated_name' => "An-Nisaa", 'ename' => "The Women", 'type' => "Medinan", 'order' => "92", 'rukus' => "24"),
            array('id' => "5", 'number_of_ayas' => "120", 'start' => "669", 'name' => "المائدة", 'translated_name' => "Al-Maaida", 'ename' => "The Table", 'type' => "Medinan", 'order' => "112", 'rukus' => "16"),
            array('id' => "6", 'number_of_ayas' => "165", 'start' => "789", 'name' => "الأنعام", 'translated_name' => "Al-An'aam", 'ename' => "The Cattle", 'type' => "Meccan", 'order' => "55", 'rukus' => "20"),
            array('id' => "7", 'number_of_ayas' => "206", 'start' => "954", 'name' => "الأعراف", 'translated_name' => "Al-A'raaf", 'ename' => "The Heights", 'type' => "Meccan", 'order' => "39", 'rukus' => "24"),
            array('id' => "8", 'number_of_ayas' => "75", 'start' => "1160", 'name' => "الأنفال", 'translated_name' => "Al-Anfaal", 'ename' => "The Spoils of War", 'type' => "Medinan", 'order' => "88", 'rukus' => "10"),
            array('id' => "9", 'number_of_ayas' => "129", 'start' => "1235", 'name' => "التوبة", 'translated_name' => "At-Tawba", 'ename' => "The Repentance", 'type' => "Medinan", 'order' => "113", 'rukus' => "16"),
            array('id' => "10", 'number_of_ayas' => "109", 'start' => "1364", 'name' => "يونس", 'translated_name' => "Yunus", 'ename' => "Jonas", 'type' => "Meccan", 'order' => "51", 'rukus' => "11"),
            array('id' => "11", 'number_of_ayas' => "123", 'start' => "1473", 'name' => "هود", 'translated_name' => "Hud", 'ename' => "Hud", 'type' => "Meccan", 'order' => "52", 'rukus' => "10"),
            array('id' => "12", 'number_of_ayas' => "111", 'start' => "1596", 'name' => "يوسف", 'translated_name' => "Yusuf", 'ename' => "Joseph", 'type' => "Meccan", 'order' => "53", 'rukus' => "12"),
            array('id' => "13", 'number_of_ayas' => "43", 'start' => "1707", 'name' => "الرعد", 'translated_name' => "Ar-Ra'd", 'ename' => "The Thunder", 'type' => "Medinan", 'order' => "96", 'rukus' => "6"),
            array('id' => "14", 'number_of_ayas' => "52", 'start' => "1750", 'name' => "ابراهيم", 'translated_name' => "Ibrahim", 'ename' => "Abraham", 'type' => "Meccan", 'order' => "72", 'rukus' => "7"),
            array('id' => "15", 'number_of_ayas' => "99", 'start' => "1802", 'name' => "الحجر", 'translated_name' => "Al-Hijr", 'ename' => "The Rock", 'type' => "Meccan", 'order' => "54", 'rukus' => "6"),
            array('id' => "16", 'number_of_ayas' => "128", 'start' => "1901", 'name' => "النحل", 'translated_name' => "An-Nahl", 'ename' => "The Bee", 'type' => "Meccan", 'order' => "70", 'rukus' => "16"),
            array('id' => "17", 'number_of_ayas' => "111", 'start' => "2029", 'name' => "الإسراء", 'translated_name' => "Al-Israa", 'ename' => "The Night Journey", 'type' => "Meccan", 'order' => "50", 'rukus' => "12"),
            array('id' => "18", 'number_of_ayas' => "110", 'start' => "2140", 'name' => "الكهف", 'translated_name' => "Al-Kahf", 'ename' => "The Cave", 'type' => "Meccan", 'order' => "69", 'rukus' => "12"),
            array('id' => "19", 'number_of_ayas' => "98", 'start' => "2250", 'name' => "مريم", 'translated_name' => "Maryam", 'ename' => "Mary", 'type' => "Meccan", 'order' => "44", 'rukus' => "6"),
            array('id' => "20", 'number_of_ayas' => "135", 'start' => "2348", 'name' => "طه", 'translated_name' => "Taa-Haa", 'ename' => "Taa-Haa", 'type' => "Meccan", 'order' => "45", 'rukus' => "8"),
            array('id' => "21", 'number_of_ayas' => "112", 'start' => "2483", 'name' => "الأنبياء", 'translated_name' => "Al-Anbiyaa", 'ename' => "The Prophets", 'type' => "Meccan", 'order' => "73", 'rukus' => "7"),
            array('id' => "22", 'number_of_ayas' => "78", 'start' => "2595", 'name' => "الحج", 'translated_name' => "Al-Hajj", 'ename' => "The Pilgrimage", 'type' => "Medinan", 'order' => "103", 'rukus' => "10"),
            array('id' => "23", 'number_of_ayas' => "118", 'start' => "2673", 'name' => "المؤمنون", 'translated_name' => "Al-Muminoon", 'ename' => "The Believers", 'type' => "Meccan", 'order' => "74", 'rukus' => "6"),
            array('id' => "24", 'number_of_ayas' => "64", 'start' => "2791", 'name' => "النور", 'translated_name' => "An-Noor", 'ename' => "The Light", 'type' => "Medinan", 'order' => "102", 'rukus' => "9"),
            array('id' => "25", 'number_of_ayas' => "77", 'start' => "2855", 'name' => "الفرقان", 'translated_name' => "Al-Furqaan", 'ename' => "The Criterion", 'type' => "Meccan", 'order' => "42", 'rukus' => "6"),
            array('id' => "26", 'number_of_ayas' => "227", 'start' => "2932", 'name' => "الشعراء", 'translated_name' => "Ash-Shu'araa", 'ename' => "The Poets", 'type' => "Meccan", 'order' => "47", 'rukus' => "11"),
            array('id' => "27", 'number_of_ayas' => "93", 'start' => "3159", 'name' => "النمل", 'translated_name' => "An-Naml", 'ename' => "The Ant", 'type' => "Meccan", 'order' => "48", 'rukus' => "7"),
            array('id' => "28", 'number_of_ayas' => "88", 'start' => "3252", 'name' => "القصص", 'translated_name' => "Al-Qasas", 'ename' => "The Stories", 'type' => "Meccan", 'order' => "49", 'rukus' => "8"),
            array('id' => "29", 'number_of_ayas' => "69", 'start' => "3340", 'name' => "العنكبوت", 'translated_name' => "Al-Ankaboot", 'ename' => "The Spider", 'type' => "Meccan", 'order' => "85", 'rukus' => "7"),
            array('id' => "30", 'number_of_ayas' => "60", 'start' => "3409", 'name' => "الروم", 'translated_name' => "Ar-Room", 'ename' => "The Romans", 'type' => "Meccan", 'order' => "84", 'rukus' => "6"),
            array('id' => "31", 'number_of_ayas' => "34", 'start' => "3469", 'name' => "لقمان", 'translated_name' => "Luqman", 'ename' => "Luqman", 'type' => "Meccan", 'order' => "57", 'rukus' => "3"),
            array('id' => "32", 'number_of_ayas' => "30", 'start' => "3503", 'name' => "السجدة", 'translated_name' => "As-Sajda", 'ename' => "The Prostration", 'type' => "Meccan", 'order' => "75", 'rukus' => "3"),
            array('id' => "33", 'number_of_ayas' => "73", 'start' => "3533", 'name' => "الأحزاب", 'translated_name' => "Al-Ahzaab", 'ename' => "The Clans", 'type' => "Medinan", 'order' => "90", 'rukus' => "9"),
            array('id' => "34", 'number_of_ayas' => "54", 'start' => "3606", 'name' => "سبإ", 'translated_name' => "Saba", 'ename' => "Sheba", 'type' => "Meccan", 'order' => "58", 'rukus' => "6"),
            array('id' => "35", 'number_of_ayas' => "45", 'start' => "3660", 'name' => "فاطر", 'translated_name' => "Faatir", 'ename' => "The Originator", 'type' => "Meccan", 'order' => "43", 'rukus' => "5"),
            array('id' => "36", 'number_of_ayas' => "83", 'start' => "3705", 'name' => "يس", 'translated_name' => "Yaseen", 'ename' => "Yaseen", 'type' => "Meccan", 'order' => "41", 'rukus' => "5"),
            array('id' => "37", 'number_of_ayas' => "182", 'start' => "3788", 'name' => "الصافات", 'translated_name' => "As-Saaffaat", 'ename' => "Those drawn up in Ranks", 'type' => "Meccan", 'order' => "56", 'rukus' => "5"),
            array('id' => "38", 'number_of_ayas' => "88", 'start' => "3970", 'name' => "ص", 'translated_name' => "Saad", 'ename' => "The letter Saad", 'type' => "Meccan", 'order' => "38", 'rukus' => "5"),
            array('id' => "39", 'number_of_ayas' => "75", 'start' => "4058", 'name' => "الزمر", 'translated_name' => "Az-Zumar", 'ename' => "The Groups", 'type' => "Meccan", 'order' => "59", 'rukus' => "8"),
            array('id' => "40", 'number_of_ayas' => "85", 'start' => "4133", 'name' => "غافر", 'translated_name' => "Al-Ghaafir", 'ename' => "The Forgiver", 'type' => "Meccan", 'order' => "60", 'rukus' => "9"),
            array('id' => "41", 'number_of_ayas' => "54", 'start' => "4218", 'name' => "فصلت", 'translated_name' => "Fussilat", 'ename' => "Explained in detail", 'type' => "Meccan", 'order' => "61", 'rukus' => "6"),
            array('id' => "42", 'number_of_ayas' => "53", 'start' => "4272", 'name' => "الشورى", 'translated_name' => "Ash-Shura", 'ename' => "Consultation", 'type' => "Meccan", 'order' => "62", 'rukus' => "5"),
            array('id' => "43", 'number_of_ayas' => "89", 'start' => "4325", 'name' => "الزخرف", 'translated_name' => "Az-Zukhruf", 'ename' => "Or'name'nts of gold", 'type' => "Meccan", 'order' => "63", 'rukus' => "7"),
            array('id' => "44", 'number_of_ayas' => "59", 'start' => "4414", 'name' => "الدخان", 'translated_name' => "Ad-Dukhaan", 'ename' => "The Smoke", 'type' => "Meccan", 'order' => "64", 'rukus' => "3"),
            array('id' => "45", 'number_of_ayas' => "37", 'start' => "4473", 'name' => "الجاثية", 'translated_name' => "Al-Jaathiya", 'ename' => "Crouching", 'type' => "Meccan", 'order' => "65", 'rukus' => "4"),
            array('id' => "46", 'number_of_ayas' => "35", 'start' => "4510", 'name' => "الأحقاف", 'translated_name' => "Al-Ahqaf", 'ename' => "The Dunes", 'type' => "Meccan", 'order' => "66", 'rukus' => "4"),
            array('id' => "47", 'number_of_ayas' => "38", 'start' => "4545", 'name' => "محمد", 'translated_name' => "Muhammad", 'ename' => "Muhammad", 'type' => "Medinan", 'order' => "95", 'rukus' => "4"),
            array('id' => "48", 'number_of_ayas' => "29", 'start' => "4583", 'name' => "الفتح", 'translated_name' => "Al-Fath", 'ename' => "The Victory", 'type' => "Medinan", 'order' => "111", 'rukus' => "4"),
            array('id' => "49", 'number_of_ayas' => "18", 'start' => "4612", 'name' => "الحجرات", 'translated_name' => "Al-Hujuraat", 'ename' => "The Inner Apartments", 'type' => "Medinan", 'order' => "106", 'rukus' => "2"),
            array('id' => "50", 'number_of_ayas' => "45", 'start' => "4630", 'name' => "ق", 'translated_name' => "Qaaf", 'ename' => "The letter Qaaf", 'type' => "Meccan", 'order' => "34", 'rukus' => "3"),
            array('id' => "51", 'number_of_ayas' => "60", 'start' => "4675", 'name' => "الذاريات", 'translated_name' => "Adh-Dhaariyat", 'ename' => "The Winnowing Winds", 'type' => "Meccan", 'order' => "67", 'rukus' => "3"),
            array('id' => "52", 'number_of_ayas' => "49", 'start' => "4735", 'name' => "الطور", 'translated_name' => "At-Tur", 'ename' => "The Mount", 'type' => "Meccan", 'order' => "76", 'rukus' => "2"),
            array('id' => "53", 'number_of_ayas' => "62", 'start' => "4784", 'name' => "النجم", 'translated_name' => "An-Najm", 'ename' => "The Star", 'type' => "Meccan", 'order' => "23", 'rukus' => "3"),
            array('id' => "54", 'number_of_ayas' => "55", 'start' => "4846", 'name' => "القمر", 'translated_name' => "Al-Qamar", 'ename' => "The Moon", 'type' => "Meccan", 'order' => "37", 'rukus' => "3"),
            array('id' => "55", 'number_of_ayas' => "78", 'start' => "4901", 'name' => "الرحمن", 'translated_name' => "Ar-Rahmaan", 'ename' => "The Beneficent", 'type' => "Medinan", 'order' => "97", 'rukus' => "3"),
            array('id' => "56", 'number_of_ayas' => "96", 'start' => "4979", 'name' => "الواقعة", 'translated_name' => "Al-Waaqia", 'ename' => "The Inevitable", 'type' => "Meccan", 'order' => "46", 'rukus' => "3"),
            array('id' => "57", 'number_of_ayas' => "29", 'start' => "5075", 'name' => "الحديد", 'translated_name' => "Al-Hadid", 'ename' => "The Iron", 'type' => "Medinan", 'order' => "94", 'rukus' => "4"),
            array('id' => "58", 'number_of_ayas' => "22", 'start' => "5104", 'name' => "المجادلة", 'translated_name' => "Al-Mujaadila", 'ename' => "The Pleading Woman", 'type' => "Medinan", 'order' => "105", 'rukus' => "3"),
            array('id' => "59", 'number_of_ayas' => "24", 'start' => "5126", 'name' => "الحشر", 'translated_name' => "Al-Hashr", 'ename' => "The Exile", 'type' => "Medinan", 'order' => "101", 'rukus' => "3"),
            array('id' => "60", 'number_of_ayas' => "13", 'start' => "5150", 'name' => "الممتحنة", 'translated_name' => "Al-Mumtahana", 'ename' => "She that is to be examined", 'type' => "Medinan", 'order' => "91", 'rukus' => "2"),
            array('id' => "61", 'number_of_ayas' => "14", 'start' => "5163", 'name' => "الصف", 'translated_name' => "As-Saff", 'ename' => "The Ranks", 'type' => "Medinan", 'order' => "109", 'rukus' => "2"),
            array('id' => "62", 'number_of_ayas' => "11", 'start' => "5177", 'name' => "الجمعة", 'translated_name' => "Al-Jumu'a", 'ename' => "Friday", 'type' => "Medinan", 'order' => "110", 'rukus' => "2"),
            array('id' => "63", 'number_of_ayas' => "11", 'start' => "5188", 'name' => "المنافقون", 'translated_name' => "Al-Munaafiqoon", 'ename' => "The Hypocrites", 'type' => "Medinan", 'order' => "104", 'rukus' => "2"),
            array('id' => "64", 'number_of_ayas' => "18", 'start' => "5199", 'name' => "التغابن", 'translated_name' => "At-Taghaabun", 'ename' => "Mutual Disillusion", 'type' => "Medinan", 'order' => "108", 'rukus' => "2"),
            array('id' => "65", 'number_of_ayas' => "12", 'start' => "5217", 'name' => "الطلاق", 'translated_name' => "At-Talaaq", 'ename' => "Divorce", 'type' => "Medinan", 'order' => "99", 'rukus' => "2"),
            array('id' => "66", 'number_of_ayas' => "12", 'start' => "5229", 'name' => "التحريم", 'translated_name' => "At-Tahrim", 'ename' => "The Prohibition", 'type' => "Medinan", 'order' => "107", 'rukus' => "2"),
            array('id' => "67", 'number_of_ayas' => "30", 'start' => "5241", 'name' => "الملك", 'translated_name' => "Al-Mulk", 'ename' => "The Sovereignty", 'type' => "Meccan", 'order' => "77", 'rukus' => "2"),
            array('id' => "68", 'number_of_ayas' => "52", 'start' => "5271", 'name' => "القلم", 'translated_name' => "Al-Qalam", 'ename' => "The Pen", 'type' => "Meccan", 'order' => "2", 'rukus' => "2"),
            array('id' => "69", 'number_of_ayas' => "52", 'start' => "5323", 'name' => "الحاقة", 'translated_name' => "Al-Haaqqa", 'ename' => "The Reality", 'type' => "Meccan", 'order' => "78", 'rukus' => "2"),
            array('id' => "70", 'number_of_ayas' => "44", 'start' => "5375", 'name' => "المعارج", 'translated_name' => "Al-Ma'aarij", 'ename' => "The Ascending Stairways", 'type' => "Meccan", 'order' => "79", 'rukus' => "2"),
            array('id' => "71", 'number_of_ayas' => "28", 'start' => "5419", 'name' => "نوح", 'translated_name' => "Nooh", 'ename' => "Noah", 'type' => "Meccan", 'order' => "71", 'rukus' => "2"),
            array('id' => "72", 'number_of_ayas' => "28", 'start' => "5447", 'name' => "الجن", 'translated_name' => "Al-Jinn", 'ename' => "The Jinn", 'type' => "Meccan", 'order' => "40", 'rukus' => "2"),
            array('id' => "73", 'number_of_ayas' => "20", 'start' => "5475", 'name' => "المزمل", 'translated_name' => "Al-Muzzammil", 'ename' => "The Enshrouded One", 'type' => "Meccan", 'order' => "3", 'rukus' => "2"),
            array('id' => "74", 'number_of_ayas' => "56", 'start' => "5495", 'name' => "المدثر", 'translated_name' => "Al-Muddaththir", 'ename' => "The Cloaked One", 'type' => "Meccan", 'order' => "4", 'rukus' => "2"),
            array('id' => "75", 'number_of_ayas' => "40", 'start' => "5551", 'name' => "القيامة", 'translated_name' => "Al-Qiyaama", 'ename' => "The Resurrection", 'type' => "Meccan", 'order' => "31", 'rukus' => "2"),
            array('id' => "76", 'number_of_ayas' => "31", 'start' => "5591", 'name' => "الانسان", 'translated_name' => "Al-Insaan", 'ename' => "Man", 'type' => "Medinan", 'order' => "98", 'rukus' => "2"),
            array('id' => "77", 'number_of_ayas' => "50", 'start' => "5622", 'name' => "المرسلات", 'translated_name' => "Al-Mursalaat", 'ename' => "The Emissaries", 'type' => "Meccan", 'order' => "33", 'rukus' => "2"),
            array('id' => "78", 'number_of_ayas' => "40", 'start' => "5672", 'name' => "النبإ", 'translated_name' => "An-Naba", 'ename' => "The Announcement", 'type' => "Meccan", 'order' => "80", 'rukus' => "2"),
            array('id' => "79", 'number_of_ayas' => "46", 'start' => "5712", 'name' => "النازعات", 'translated_name' => "An-Naazi'aat", 'ename' => "Those who drag forth", 'type' => "Meccan", 'order' => "81", 'rukus' => "2"),
            array('id' => "80", 'number_of_ayas' => "42", 'start' => "5758", 'name' => "عبس", 'translated_name' => "Abasa", 'ename' => "He frowned", 'type' => "Meccan", 'order' => "24", 'rukus' => "1"),
            array('id' => "81", 'number_of_ayas' => "29", 'start' => "5800", 'name' => "التكوير", 'translated_name' => "At-Takwir", 'ename' => "The Overthrowing", 'type' => "Meccan", 'order' => "7", 'rukus' => "1"),
            array('id' => "82", 'number_of_ayas' => "19", 'start' => "5829", 'name' => "الإنفطار", 'translated_name' => "Al-Infitaar", 'ename' => "The Cleaving", 'type' => "Meccan", 'order' => "82", 'rukus' => "1"),
            array('id' => "83", 'number_of_ayas' => "36", 'start' => "5848", 'name' => "المطففين", 'translated_name' => "Al-Mutaffifin", 'ename' => "Defrauding", 'type' => "Meccan", 'order' => "86", 'rukus' => "1"),
            array('id' => "84", 'number_of_ayas' => "25", 'start' => "5884", 'name' => "الإنشقاق", 'translated_name' => "Al-Inshiqaaq", 'ename' => "The Splitting Open", 'type' => "Meccan", 'order' => "83", 'rukus' => "1"),
            array('id' => "85", 'number_of_ayas' => "22", 'start' => "5909", 'name' => "البروج", 'translated_name' => "Al-Burooj", 'ename' => "The Constellations", 'type' => "Meccan", 'order' => "27", 'rukus' => "1"),
            array('id' => "86", 'number_of_ayas' => "17", 'start' => "5931", 'name' => "الطارق", 'translated_name' => "At-Taariq", 'ename' => "The Morning Star", 'type' => "Meccan", 'order' => "36", 'rukus' => "1"),
            array('id' => "87", 'number_of_ayas' => "19", 'start' => "5948", 'name' => "الأعلى", 'translated_name' => "Al-A'laa", 'ename' => "The Most High", 'type' => "Meccan", 'order' => "8", 'rukus' => "1"),
            array('id' => "88", 'number_of_ayas' => "26", 'start' => "5967", 'name' => "الغاشية", 'translated_name' => "Al-Ghaashiya", 'ename' => "The Overwhelming", 'type' => "Meccan", 'order' => "68", 'rukus' => "1"),
            array('id' => "89", 'number_of_ayas' => "30", 'start' => "5993", 'name' => "الفجر", 'translated_name' => "Al-Fajr", 'ename' => "The Dawn", 'type' => "Meccan", 'order' => "10", 'rukus' => "1"),
            array('id' => "90", 'number_of_ayas' => "20", 'start' => "6023", 'name' => "البلد", 'translated_name' => "Al-Balad", 'ename' => "The City", 'type' => "Meccan", 'order' => "35", 'rukus' => "1"),
            array('id' => "91", 'number_of_ayas' => "15", 'start' => "6043", 'name' => "الشمس", 'translated_name' => "Ash-Shams", 'ename' => "The Sun", 'type' => "Meccan", 'order' => "26", 'rukus' => "1"),
            array('id' => "92", 'number_of_ayas' => "21", 'start' => "6058", 'name' => "الليل", 'translated_name' => "Al-Lail", 'ename' => "The Night", 'type' => "Meccan", 'order' => "9", 'rukus' => "1"),
            array('id' => "93", 'number_of_ayas' => "11", 'start' => "6079", 'name' => "الضحى", 'translated_name' => "Ad-Dhuhaa", 'ename' => "The Morning Hours", 'type' => "Meccan", 'order' => "11", 'rukus' => "1"),
            array('id' => "94", 'number_of_ayas' => "8", 'start' => "6090", 'name' => "الشرح", 'translated_name' => "Ash-Sharh", 'ename' => "The Consolation", 'type' => "Meccan", 'order' => "12", 'rukus' => "1"),
            array('id' => "95", 'number_of_ayas' => "8", 'start' => "6098", 'name' => "التين", 'translated_name' => "At-Tin", 'ename' => "The Fig", 'type' => "Meccan", 'order' => "28", 'rukus' => "1"),
            array('id' => "96", 'number_of_ayas' => "19", 'start' => "6106", 'name' => "العلق", 'translated_name' => "Al-Alaq", 'ename' => "The Clot", 'type' => "Meccan", 'order' => "1", 'rukus' => "1"),
            array('id' => "97", 'number_of_ayas' => "5", 'start' => "6125", 'name' => "القدر", 'translated_name' => "Al-Qadr", 'ename' => "The Power, Fate", 'type' => "Meccan", 'order' => "25", 'rukus' => "1"),
            array('id' => "98", 'number_of_ayas' => "8", 'start' => "6130", 'name' => "البينة", 'translated_name' => "Al-Bayyina", 'ename' => "The Evidence", 'type' => "Medinan", 'order' => "100", 'rukus' => "1"),
            array('id' => "99", 'number_of_ayas' => "8", 'start' => "6138", 'name' => "الزلزلة", 'translated_name' => "Az-Zalzala", 'ename' => "The Earthquake", 'type' => "Medinan", 'order' => "93", 'rukus' => "1"),
            array('id' => "100", 'number_of_ayas' => "11", 'start' => "6146", 'name' => "العاديات", 'translated_name' => "Al-Aadiyaat", 'ename' => "The Chargers", 'type' => "Meccan", 'order' => "14", 'rukus' => "1"),
            array('id' => "101", 'number_of_ayas' => "11", 'start' => "6157", 'name' => "القارعة", 'translated_name' => "Al-Qaari'a", 'ename' => "The Calamity", 'type' => "Meccan", 'order' => "30", 'rukus' => "1"),
            array('id' => "102", 'number_of_ayas' => "8", 'start' => "6168", 'name' => "التكاثر", 'translated_name' => "At-Takaathur", 'ename' => "Competition", 'type' => "Meccan", 'order' => "16", 'rukus' => "1"),
            array('id' => "103", 'number_of_ayas' => "3", 'start' => "6176", 'name' => "العصر", 'translated_name' => "Al-Asr", 'ename' => "The Declining Day, Epoch", 'type' => "Meccan", 'order' => "13", 'rukus' => "1"),
            array('id' => "104", 'number_of_ayas' => "9", 'start' => "6179", 'name' => "الهمزة", 'translated_name' => "Al-Humaza", 'ename' => "The Traducer", 'type' => "Meccan", 'order' => "32", 'rukus' => "1"),
            array('id' => "105", 'number_of_ayas' => "5", 'start' => "6188", 'name' => "الفيل", 'translated_name' => "Al-Fil", 'ename' => "The Elephant", 'type' => "Meccan", 'order' => "19", 'rukus' => "1"),
            array('id' => "106", 'number_of_ayas' => "4", 'start' => "6193", 'name' => "قريش", 'translated_name' => "Quraish", 'ename' => "Quraysh", 'type' => "Meccan", 'order' => "29", 'rukus' => "1"),
            array('id' => "107", 'number_of_ayas' => "7", 'start' => "6197", 'name' => "الماعون", 'translated_name' => "Al-Maa'un", 'ename' => "Almsgiving", 'type' => "Meccan", 'order' => "17", 'rukus' => "1"),
            array('id' => "108", 'number_of_ayas' => "3", 'start' => "6204", 'name' => "الكوثر", 'translated_name' => "Al-Kawthar", 'ename' => "Abundance", 'type' => "Meccan", 'order' => "15", 'rukus' => "1"),
            array('id' => "109", 'number_of_ayas' => "6", 'start' => "6207", 'name' => "الكافرون", 'translated_name' => "Al-Kaafiroon", 'ename' => "The Disbelievers", 'type' => "Meccan", 'order' => "18", 'rukus' => "1"),
            array('id' => "110", 'number_of_ayas' => "3", 'start' => "6213", 'name' => "النصر", 'translated_name' => "An-Nasr", 'ename' => "Divine Support", 'type' => "Medinan", 'order' => "114", 'rukus' => "1"),
            array('id' => "111", 'number_of_ayas' => "5", 'start' => "6216", 'name' => "المسد", 'translated_name' => "Al-Masad", 'ename' => "The Palm Fibre", 'type' => "Meccan", 'order' => "6", 'rukus' => "1"),
            array('id' => "112", 'number_of_ayas' => "4", 'start' => "6221", 'name' => "الإخلاص", 'translated_name' => "Al-Ikhlaas", 'ename' => "Sincerity", 'type' => "Meccan", 'order' => "22", 'rukus' => "1"),
            array('id' => "113", 'number_of_ayas' => "5", 'start' => "6225", 'name' => "الفلق", 'translated_name' => "Al-Falaq", 'ename' => "The Dawn", 'type' => "Meccan", 'order' => "20", 'rukus' => "1"),
            array('id' => "114", 'number_of_ayas' => "6", 'start' => "6230", 'name' => "الناس", 'translated_name' => "An-Naas", 'ename' => "Mankind", 'type' => "Meccan", 'order' => "21", 'rukus' => "1"),
        );

        // dd($data);
        Surah::insert($data);
    }
}