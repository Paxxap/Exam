<?
if (!empty($arParams["ID_CANONICAL"])) {

  $arSelect = ["ID", "IBLOCK_ID", "NAME", "PROPERTY_NEWS"];

  $arFilter = ["IBLOCK_ID" => $arParams["ID_CANONICAL"], "PROPERTY_NEWS" => $arResult["ID"], "ACTIVE" => "Y"];

  $res = CIBlockElement::GetList([], $arFilter, false, false, $arSelect);

  if ($ob = $res->GetNextElement())
  {
    $arFields = $ob->GetFields();
    $arResult["CANONICAL_NAME"] = $arFields["NAME"];
    $this->__component->SetResultCacheKeys(array("CANONICAL_NAME"));
  }
}
