public class BubbleSort {

	public static void main(String[] args)
	{
		int[] myArray = {10, 18, 4, 24, 33, 40, 8, 3, 12};
		bubbleSorter(myArray);
		for(int i=0; i<myArray.length; i++)
			System.out.print(myArray[i] + ", ");
	}

	public static void bubbleSorter(int[] arr) {
		for (int i = arr.length � 1; i > 0; i--) {
			for (int j = 0; j < i; j++) {
				if (arr[j] > arr[j+1])
					swap(arr, j, j+1);
			}
		}
	}

	private static void swap(int[] arr, int i, int j) {
		int temp=arr[j];
		arr[j]=arr[i];
		arr[i]=temp;
	}

}