module Main exposing (..)
import Array exposing (Random, Shuffle)
import Random.Array
import Browser
import Html exposing (Html, button, div, text)
import Html.Events exposing (onClick)



-- MAIN


main =
  Browser.sandbox { init = init, update = update, view = view }
	
	numberList = shuffle [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16]

-- MODEL
 Model = Array.fromList numberList
init : Model
init = Model = Array.fromList numberList

-- UPDATE

type Msg
  = Swap
  | noSwap

type Msg2
 = Done
 | no

update : Msg -> Model -> Model
update =
 case msg of
 if (elemIndex Msg Model == elemIndex 16 numberList + 1 || elemIndex Msg numberList == elemIndex 16 numberList - 1 || elemIndex Msg numberList == elemIndex 16 numberList + 4 || elemIndex Msg numberList == elemIndex 16 numberList - 4) then
  
    Swap ->
      swapAt elemIndex Msg elemIndex 16 numberList
      Model = Array.fromList numberList
else
    noSwap ->
      Model = Model
	
update : Msg2 -> Model
case of
if (numberList == [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16])
then
 Done -> 
    Model = init
 else 
 no->
    Model = Arayy.fromList NumberList
 
-- VIEW


view : Model -> Html Msg
view model =
  div []
    [ button [ onClick Msg = Array.get 0 ] [ text (String.fromInt Model.get 0) ], button [ onClick Msg = Array.get 1 ] [ text (String.fromInt Model.get 1) ], button [ onClick Msg = Array.get 2 ] [ text (String.fromInt Model.get 2) ],button [ onClick Array.get 3 ] [ text (String.fromInt Model.get 3) ]
    , div []
button [ onClick Msg = Array.get 4 ] [ text (String.fromInt Model.get 4) ], button [ onClick Msg = Array.get 5 ] [ text (String.fromInt Model.get 5) ], button [ onClick Msg = Array.get 6 ] [ text (String.fromInt Model.get 6) ],button [ onClick Array.get 7 ] [ text (String.fromInt Model.get 7) ], div []
button [ onClick Msg = Array.get 8 ] [ text (String.fromInt Model.get 8) ], button [ onClick Msg = Array.get 9 ] [ text (String.fromInt Model.get 9) ], button [ onClick Msg = Array.get 10 ] [ text (String.fromInt Model.get 10) ],button [ onClick Array.get 11 ] [ text (String.fromInt Model.get 11) ], div []
button [ onClick Msg = Array.get 12 ] [ text (String.fromInt Model.get 12) ], button [ onClick Msg = Array.get 13 ] [ text (String.fromInt Model.get 13) ], button [ onClick Msg = Array.get 14 ] [ text (String.fromInt Model.get 14) ],button [ onClick Array.get 15 ] [ text (String.fromInt Model.get 15) ] ]

	div []
	[ button [ onClick Msg2 ] [ text "check" ]]
    
