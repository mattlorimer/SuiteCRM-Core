/**
 * Check if value is false
 *
 * @param {any} value to check
 * @returns {boolean} isFalse
 */
export const isFalse = (value: any): boolean => (value === false || value === 'false');

/**
 * Check if value is true
 *
 * @param {any} value to check
 * @returns {boolean} isFalse
 */
export const isTrue = (value: any): boolean => (value === true || value === 'true');

/**
 * Check if value is null or undefined
 *
 * @param {any} value to check
 * @returns {boolean} isVoid
 */
export const isVoid = (value: any): boolean => (value === null || typeof value === 'undefined');
/**
 * Check if value is an empty string
 *
 * @param {any} value to check
 * @returns {boolean} isEmptyString
 */
export const isEmptyString = (value: any): boolean => (typeof value === 'string' && !value.trim());
