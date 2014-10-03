
public class PairSums 
{
	static final int ARRAY_LENGTH = 7;
	static final int ARRAY_MAX_VALUE = 10;
	static final int SUM_GOAL = 12;
	static int counter=0;

	public static void main(String[] args)
	{
		int testArray[] = SortCount.randomArray(ARRAY_LENGTH, ARRAY_MAX_VALUE);
		System.out.print("The array is: ");
		for(int i = 0; i < testArray.length; i++)
			System.out.print(testArray[i] + " ");
		System.out.println();
		int k = SUM_GOAL;
		findPairs(testArray, k);
	}

	/*
	 * This method is O(n^2) because there are n(n+1)/2
	 * comparisons for an array of length n.  The largest
	 * term is n^2, thus the efficiency is O(n^2).
	 */
	public static void findPairs(int[] testArray, int k) 
	{
		for(int i = 0; i < testArray.length; i++)
		{
			for(int j = 0; j < testArray.length; j++)
			{				
				if(i == j)
					break;

				if(testArray[i] + testArray[j] == k)
					System.out.println(testArray[i] + " + " + testArray[j] + " = " + k);
			}
		}
	}
}
