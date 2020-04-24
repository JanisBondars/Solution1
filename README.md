# **Instructions:**

To run any of the following function download solutions.php file and add namespace accordingly or for tests just download and run solution.php file. 

# **Functions:**

###### findOddEvenPair():
1) Function creates empty array 'answer' where it will store valid cases.
2) Function creates 'firstElement' and 'lastElement' so we can latter check if array is valid.
3) Function creates 'totalRuns', so we can know how many possible combinations we can check.
4) With a simple if statement we are checking if first and last element of given array are the same parity. If true echo out 'Invalid array!'.
5) If first and last element have different parity then function proceeds and runs a (for) loop where starting from index 0 of given array loop checks if index value and index + 1 value are different parity.
If true then index number's saved in 'answer' array, if false loop proceeds to next iteration.
6) When iteration's done function returns last valid value from 'answer' array.  


###### **class SummationService**

1) When class SummationService is initialized, class SummationService is expecting array of any integers as its properties value.
2) Class has one function sum() which accepts 2 integers 'a' and 'b' which will be used as indexes (from, to) in sum() function. 
3) When function sum(a, b) is called on the object it will first call function array slice which will create a new array based on indexes provided as function parameters. 
Then array_sum function is called which will return sum of array that we received from array_slice function.



###### **longestSubstr**

1) Function converts string to array 'splitString'.
2) Function creates 3 empty array 'combination' (where unique combination will be stored), 'result' (valid result will be stored), 'answer' (where all valid results will be stored).
3) Function creates 'possibleCombinations' for max iteration count.
4) Then we go thru splitString array starting from index 0 and create 'combination' from indexes $i . $i+1.
5) Checking if combination already exist in 'combinations' array if true then push first index value to 'result' array, then push string from 'result' array to 'answer' array where it is stored as valid combination, and reset 'combinations' and 'result' array, so we can use them to find next possible combination.
6) If 'combination' is not in the 'combinations' array we push it in 'combinations' array and push first index value from iteration to 'result' array.
7) After point 6. we check if that was last iteration, if true push second index value to 'result' array and push string from result to 'answer' array where we store valid combination.
8) When iteration's done we check for the longest strings index from 'answer' array and return its value from function. 