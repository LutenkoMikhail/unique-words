<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


echo "<h1>Dev-Pro.net</h1>";
echo "<h3>Sicom Junior PHP Developer.</h3>";
echo "<h3>Test task. </h3>";
echo "<h3>2.5 Unique words .</h3>";


/**
 * The function returns an array of unique words in the text.
 * @param string $text
 * @return array
 */
function getUniqueWords(string $text): array
{
    preg_match_all('/([a-zA-Z]+)/', strtolower($text), $resultArray);
    return array_keys(array_count_values($resultArray [0]), 1);
}

$textSamples = 'After several days of rain that nearly floods Derry, Maine, five-year-old Georgie Denbrough goes
outside to play. He brings with him a paper boat his older brother, Bill, made for him while sick in
bed. Georgie helps with the boat by retrieving a box of paraffin from the shelves by the cellar stairs,
even though the power is out and Georgie imagines a monster lives in the cellar. Bill melts the
paraffin in a bowl, and the boys laugh and joke together while they smear the paraffin over the
folded newspaper boat to waterproof it. Before Georgie goes out to play, he kisses Bill\'s cheek, and
Bill tells Georgie to be careful.
Even though the rains have slackened, the gutters run with water. In his yellow hat and slicker,
Georgie follows his boat as it sails along Witcham Street, wishing Bill could be with him to see it go
because Georgie is not as good as Bill at telling stories about what he sees. A current takes the
boat into a storm drain, and Georgie peeks inside to look for it.
In the drain Georgie sees a pair of yellow eyes. Scared, he begins to back away, but a voice speaks
to him. Georgie looks back and sees a clown; the clown introduces himself as "Mr. Bob Gray, also
known as Pennywise the Dancing Clown." Georgie at first thought the drain smelled like his scary
cellar at home, but now he can smell a carnival. Pennywise has Georgie\'s boat in one hand and a
balloon in the other; he offers Georgie both. When Georgie reaches forward, Pennywise grabs
Georgie\'s arm and rips it off. Georgie dies immediately. Dave Gardner, arriving "only 45 seconds
after the first scream," finds Georgie\'s body.
The sheriff tells reporters Georgie must have got his arm stuck in a fast current in the storm drain.
Mrs. Denbrough is sedated in the local emergency room; Bill remains sick in bed, listening to his
father weep in another room. The paper boat continues through the sewers to the Penobscot River
and out to sea as the rain clouds break overhead.';


echo "Text sample: {$textSamples}" . PHP_EOL;
echo 'These words occur once in the text.:' . PHP_EOL;
foreach (getUniqueWords($textSamples) as $key) {
    echo "Unique word : {$key} " . PHP_EOL;
}






